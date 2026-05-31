from pathlib import Path
bad = ['Â£', 'â€“', 'â€', 'Ã']
files = list(Path('.').rglob('*.html'))
found = []
for file in files:
    text = file.read_text(encoding='utf-8', errors='ignore')
    if any(b in text for b in bad):
        found.append(str(file))
print('bad files', len(found))
for item in found[:40]:
    print(item)
