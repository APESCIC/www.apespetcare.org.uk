import json
from pathlib import Path

data = json.loads(Path('crawl/extracted/site_content.json').read_text(encoding='utf-8'))
for p in data:
    print(f"{len(p['content_blocks']):3} | {p['url']}")
