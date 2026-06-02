from pathlib import Path
from urllib.parse import unquote, urlparse
import re

html_files = [p for p in Path('.').rglob('*.html') if 'crawl' not in p.parts]
broken = []

href_re = re.compile(r'href="([^"]+)"')

for file in html_files:
    text = file.read_text(encoding='utf-8', errors='ignore')
    for href in href_re.findall(text):
        if href.startswith(('http://', 'https://', 'mailto:', '#', 'javascript:')):
            continue
        target = href.split('#', 1)[0].split('?', 1)[0]
        if not target:
            continue
        resolved = (file.parent / unquote(target)).resolve()
        if target.endswith('/'):
            resolved = resolved / 'index.html'
        if target == './':
            resolved = (file.parent / 'index.html').resolve()
        if not resolved.exists():
            broken.append((str(file), href, str(resolved)))

print('html files checked:', len(html_files))
print('broken links:', len(broken))
for entry in broken[:40]:
    print('FILE:', entry[0])
    print('HREF:', entry[1])
    print('MISS:', entry[2])
