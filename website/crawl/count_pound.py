from pathlib import Path
count = 0
for f in Path('.').rglob('*.html'):
    t = f.read_text(encoding='utf-8', errors='ignore')
    count += t.count('£')
print('pound symbols', count)
