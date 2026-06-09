from pathlib import Path
import re

PUBLIC_ROOT = Path('public')
EXCLUDE_DIRS = {PUBLIC_ROOT / 'crawl'}

ATTRIBUTE_PATTERN = re.compile(r'(?P<attr>href|src|poster|data-src)=(?P<quote>["\"])(?P<path>/[^"\']*)(?P=quote)')
URL_PATTERN = re.compile(r'url\((?P<quote>["\']?)/(?P<path>[^"\')]+)(?P=quote)\)')


def should_skip(path: Path) -> bool:
    return any(excluded in path.parents for excluded in EXCLUDE_DIRS)


def relative_prefix(html_path: Path) -> str:
    rel = html_path.relative_to(PUBLIC_ROOT)
    depth = len(rel.parent.parts)
    if depth == 0:
        return ''
    return '../' * depth


def rewrite_attributes(text: str, prefix: str) -> str:
    def replace(match):
        attr = match.group('attr')
        path = match.group('path')[1:]
        if path == '':
            if attr == 'href':
                replacement = './'
            else:
                replacement = prefix
        else:
            replacement = prefix + path
        return f'{attr}={match.group("quote")}{replacement}{match.group("quote")}'

    text = ATTRIBUTE_PATTERN.sub(replace, text)
    text = URL_PATTERN.sub(lambda m: f'url({m.group("quote")}{prefix}{m.group("path")}{m.group("quote")})', text)
    return text


def fix_html_file(path: Path) -> bool:
    original = path.read_text(encoding='utf-8')
    prefix = relative_prefix(path)
    rewritten = rewrite_attributes(original, prefix)
    if rewritten != original:
        path.write_text(rewritten, encoding='utf-8')
        return True
    return False


def main():
    if not PUBLIC_ROOT.exists():
        raise SystemExit('public/ directory not found')

    updated_files = []
    for html_path in sorted(PUBLIC_ROOT.rglob('*.html')):
        if should_skip(html_path):
            continue
        if fix_html_file(html_path):
            updated_files.append(str(html_path))

    print(f'Updated {len(updated_files)} HTML files')
    for filename in updated_files:
        print(filename)


if __name__ == '__main__':
    main()
