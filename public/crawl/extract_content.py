import json
import re
from pathlib import Path
from lxml import html

root = Path('crawl/html')
out_dir = Path('crawl/extracted')
out_dir.mkdir(parents=True, exist_ok=True)

def clean_text(t: str) -> str:
    t = re.sub(r'\s+', ' ', t or '').strip()
    return t

def dedupe_keep_order(items):
    seen = set()
    out = []
    for item in items:
        key = item.lower()
        if key in seen:
            continue
        seen.add(key)
        out.append(item)
    return out

all_pages = []
for file in sorted(root.glob('*.html')):
    raw = file.read_text(encoding='utf-8', errors='ignore')

    title_m = re.search(r'<title>(.*?)</title>', raw, re.I | re.S)
    title = clean_text(html.fromstring(f'<div>{title_m.group(1)}</div>').text_content()) if title_m else file.stem

    url_m = re.search(r'<link rel="canonical" href="([^"]+)"', raw, re.I)
    url = url_m.group(1) if url_m else ''

    start_idx = raw.find('data-theme-content-container="theme-content-container"')
    if start_idx == -1:
        start_idx = raw.find('class="theme-content-area')
    end_idx = raw.find('<div role="contentinfo"')

    content = raw[start_idx:end_idx] if start_idx != -1 and end_idx != -1 and end_idx > start_idx else raw

    # Remove scripts/styles and inline SVG/icon noise
    content = re.sub(r'<script[\s\S]*?</script>', ' ', content, flags=re.I)
    content = re.sub(r'<style[\s\S]*?</style>', ' ', content, flags=re.I)
    content = re.sub(r'<svg[\s\S]*?</svg>', ' ', content, flags=re.I)

    try:
        doc = html.fromstring(content)
    except Exception:
        doc = html.fromstring(f'<div>{content}</div>')

    # Remove obvious non-content regions
    for xp in [
        '//*[contains(@class, "theme-menu")]',
        '//*[contains(@class, "theme-header")]',
        '//*[contains(@class, "theme-topbar")]',
        '//*[contains(@class, "cookie")]',
        '//*[contains(@class, "zpdivider")]',
    ]:
        for el in doc.xpath(xp):
            parent = el.getparent()
            if parent is not None:
                parent.remove(el)

    blocks = []
    for el in doc.xpath('//h1|//h2|//h3|//h4|//h5|//h6|//p|//li|//td|//th'):
        txt = clean_text(el.text_content())
        if not txt:
            continue
        if len(txt) < 2:
            continue
        # Skip common boilerplate bits
        if txt in {'Sign In', 'Sign Up', 'Search', 'Subscribe'}:
            continue
        if txt.startswith('Skip to '):
            continue
        blocks.append(txt)

    blocks = dedupe_keep_order(blocks)

    page_data = {
        'file': file.name,
        'title': title,
        'url': url,
        'content_blocks': blocks,
    }
    all_pages.append(page_data)

    md = [f'# {title}', '', f'URL: {url}', '']
    md += [f'- {b}' for b in blocks]
    (out_dir / f'{file.stem}.md').write_text('\n'.join(md), encoding='utf-8')

(Path('crawl/extracted/site_content.json')).write_text(json.dumps(all_pages, indent=2, ensure_ascii=False), encoding='utf-8')
print(f'Extracted {len(all_pages)} pages')
