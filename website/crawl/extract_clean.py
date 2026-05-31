import json
import re
import urllib.request
from pathlib import Path
from lxml import html

raw_urls = Path('crawl_urls.txt').read_text(encoding='utf-8-sig').splitlines()
urls = [u.strip().lstrip('\ufeff') for u in raw_urls if u.strip() and not u.strip().endswith('/feed')]
out_dir = Path('crawl/extracted_clean')
out_dir.mkdir(parents=True, exist_ok=True)

skip_exact = {
    'Sign In', 'Sign Up', 'Sign Out', 'More', 'Read More',
    'Skip to search', 'Skip to main content', 'Subscribe',
    'Home', 'APES', 'Events', 'Contact Us'
}

skip_prefixes = (
    'data-theme-content-container=',
)

def clean_text(t: str) -> str:
    t = t.replace('\xa0', ' ')
    t = re.sub(r'\s+', ' ', t).strip()
    t = re.sub(r'([a-z])([A-Z])', r'\1 \2', t)
    return t

def dedupe(items):
    seen = set()
    out = []
    for i in items:
        k = i.lower()
        if k in seen:
            continue
        seen.add(k)
        out.append(i)
    return out

def slug_from_url(url: str) -> str:
    from urllib.parse import urlparse, unquote
    p = unquote(urlparse(url).path).strip('/')
    if not p:
        return 'index'
    s = re.sub(r'[^a-zA-Z0-9/-]+', '', p.replace(' ', '-'))
    return s.replace('/', '-').lower()

all_pages = []
for url in urls:
    try:
        with urllib.request.urlopen(url, timeout=30) as r:
            raw = r.read()
    except Exception as e:
        print(f'FAIL {url} ({type(e).__name__})')
        continue

    text = raw.decode('utf-8', errors='replace')
    doc = html.fromstring(text)

    for bad in doc.xpath('//script|//style|//svg|//noscript'):
        p = bad.getparent()
        if p is not None:
            p.remove(bad)

    content_nodes = doc.xpath('//*[@data-theme-content-container="theme-content-container"]')
    if content_nodes:
        content = content_nodes[0]
    else:
        alt = doc.xpath('//*[contains(@class, "theme-content-area") or contains(@class, "zpsection")]')
        content = alt[0] if alt else doc

    for bad in content.xpath('.//*[@role="contentinfo"]|.//*[contains(@class, "theme-footer")]|.//*[contains(@class, "theme-header")]|.//*[contains(@class, "theme-menu")]'):
        p = bad.getparent()
        if p is not None:
            p.remove(bad)

    title = doc.xpath('string(//title)').strip() or url
    blocks = []

    for el in content.xpath('.//h1|.//h2|.//h3|.//h4|.//h5|.//h6|.//p|.//li|.//td|.//th|.//blockquote'):
        txt = clean_text(el.text_content())
        if not txt or len(txt) < 2:
            continue
        if txt in skip_exact:
            continue
        if any(txt.startswith(p) for p in skip_prefixes):
            continue
        if txt.count(' ') == 0 and len(txt) <= 2:
            continue
        blocks.append(txt)

    blocks = dedupe(blocks)

    page = {
        'url': url,
        'title': clean_text(title),
        'content_blocks': blocks,
    }
    all_pages.append(page)

    slug = slug_from_url(url)
    md = [f"# {page['title']}", '', f"URL: {url}", ''] + [f"- {b}" for b in blocks]
    (out_dir / f'{slug}.md').write_text('\n'.join(md), encoding='utf-8')
    print('OK', slug, len(blocks))

Path('crawl/extracted_clean/site_content.json').write_text(json.dumps(all_pages, indent=2, ensure_ascii=False), encoding='utf-8')
print('Saved', len(all_pages), 'pages')
