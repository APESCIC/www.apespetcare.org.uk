import json
from pathlib import Path
from textwrap import shorten

data = json.loads(Path('crawl/extracted/site_content.json').read_text(encoding='utf-8'))
print('pages', len(data))
for page in data:
    print('\n' + page['url'])
    for block in page['content_blocks'][:18]:
        print(' -', shorten(block, width=120, placeholder='...'))
