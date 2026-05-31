import json
import re
from html import escape
from pathlib import Path
from urllib.parse import quote, unquote, urlparse

DATA_PATH = Path('crawl/extracted_clean/site_content.json')
pages = json.loads(DATA_PATH.read_text(encoding='utf-8'))

SITE_TITLE = 'APES Pet Care Clinic'
SITE_TAGLINE = 'Heart-warming, affordable care for every pet family.'
NOTICE = 'Please note: We are currently operating from temporary premises while our new premises in Warrington are being prepared. Thank you for bearing with us during this time.'
PHONE = '0300 302 0228'
EMAIL = 'info@apespetcare.org.uk'
ADDRESS = '40 Morris Street, St Helens, WA9 3EN'

manual_page_text = {
    'bookings': [
        'Booking System',
        'Appointments are offered as a booking-only service so we can reserve enough time for each pet and family.',
        'To arrange a visit, please use our booking route or contact the clinic team directly.',
        'Full payment is required at the point of booking, and appointments are managed under our booking policy.'
    ]
}

nav_main = [
    ('Home', ''),
    ('About Us', 'about-us'),
    ('Bookings', 'bookings'),
    ('Contact', 'contact'),
    ('Donate', 'donate'),
    ('Events', 'events'),
    ('News', 'news'),
]

services_nav = [
    ('General Services', 'general-services'),
    ('Dog Care', 'dog-care'),
    ('Cat Care', 'cat-care'),
    ('Reptile Care', 'reptile-care'),
    ('Invert Care', 'invert-care'),
    ('Rabbit Care', 'rabbit-care'),
    ('Guinea Pig Care', 'guinea-care'),
    ('Ferret Care', 'ferret-care'),
    ('Care Plans', 'Care Plans/care-plans'),
    ('Lab Services', 'APES Lab Services/apes-lab-services'),
]

policies_nav = [
    ('Booking Policy', 'policies/booking-policy'),
    ('Privacy Policy', 'policies/privacy-policy'),
    ('Refund Policy', 'policies/refund-policy'),
    ('Terms and Conditions', 'policies/terms-and-conditions'),
]

replacement_map = {
    'Â£': '£',
    '£ ': '£ ',
    'â€“': '-',
    'â€”': '-',
    'â€˜': "'",
    'â€™': "'",
    'â€œ': '"',
    'â€\x9d': '"',
    'â€\x9c': '"',
    'â€¦': '...',
    'â€': '"',
    '\xa0': ' ',
}


def normalize_route(url: str) -> str:
    p = unquote(urlparse(url).path)
    if p in ('', '/'):
        return ''
    p = p.rstrip('/')
    return p.lstrip('/')


def route_depth(route: str) -> int:
    if not route:
        return 0
    return len(route.split('/'))


def root_prefix(route: str) -> str:
    depth = route_depth(route)
    return '../' * depth


def encode_route(route: str) -> str:
    if not route:
        return ''
    return '/'.join(quote(part) for part in route.split('/'))


def href_to(target_route: str, current_route: str) -> str:
    prefix = root_prefix(current_route)
    if target_route == '':
        return prefix if prefix else './'
    return f"{prefix}{encode_route(target_route)}/"


def clean_line(line: str) -> str:
    text = line
    for old, new in replacement_map.items():
        text = text.replace(old, new)
    text = text.replace('Â', '')
    text = re.sub(r'\s+', ' ', text).strip()
    text = re.sub(r'([a-z])([A-Z])', r'\1 \2', text)
    return text


def is_price_line(text: str) -> bool:
    return bool(re.search(r'£\s?\d', text)) or text.startswith('£')


def is_heading_candidate(text: str) -> bool:
    if len(text) > 62:
        return False
    if text.endswith('.'):
        return False
    if is_price_line(text):
        return False
    if text.count(' ') > 9:
        return False
    if re.search(r'https?://|@', text):
        return False
    return True


def pick_lead(blocks):
    for b in blocks:
        if len(b) > 75:
            return b
    return blocks[0] if blocks else 'Practical, compassionate support for pets and their people.'


def page_kicker(route: str) -> str:
    if route.startswith('policies/'):
        return 'Clinic Policy'
    if 'care' in route or 'services' in route:
        return 'Pet Care Service'
    if route.startswith('news'):
        return 'Clinic News'
    if route == 'contact':
        return 'Contact'
    if route == 'bookings':
        return 'Appointments'
    return 'APES Pet Care Clinic'


def render_content(blocks):
    filtered = []
    for b in blocks:
        b = clean_line(b)
        if not b:
            continue
        if b.lower() in {'book appointment', 'get started now', 'read more'}:
            continue
        filtered.append(b)

    if not filtered:
        return '<div class="content-card reveal"><h2>Booking Support</h2><p>Contact us to arrange your pet care appointment and service plan.</p></div>'

    cards = []
    current = {'title': 'Page Information', 'items': []}

    for line in filtered:
        if is_heading_candidate(line):
            if current['items']:
                cards.append(current)
                current = {'title': line, 'items': []}
            else:
                current['title'] = line
        else:
            current['items'].append(line)

    if current['title'] or current['items']:
        cards.append(current)

    html_cards = []
    for card in cards:
        title = escape(card['title']) if card['title'] else 'Details'
        parts = [f'<div class="content-card reveal"><h2>{title}</h2>']
        for item in card['items']:
            cls = ' class="price"' if is_price_line(item) else ''
            parts.append(f'<p{cls}>{escape(item)}</p>')
        if not card['items']:
            parts.append('<p>More details are available through our team. Please contact us for help.</p>')
        parts.append('</div>')
        html_cards.append(''.join(parts))

    return '\n'.join(html_cards)


def render_home_services(current_route: str) -> str:
    cards = []
    for label, route in services_nav:
        cards.append(f'<a class="service-card reveal" href="{href_to(route, current_route)}">{escape(label)}</a>')
    return '<div class="service-grid">' + ''.join(cards) + '</div>'


def render_nav(current_route: str) -> str:
    main_links = ''.join(
        f'<a href="{href_to(route, current_route)}">{escape(label)}</a>'
        for label, route in nav_main
    )
    services_links = ''.join(
        f'<a href="{href_to(route, current_route)}">{escape(label)}</a>'
        for label, route in services_nav
    )
    policies_links = ''.join(
        f'<a href="{href_to(route, current_route)}">{escape(label)}</a>'
        for label, route in policies_nav
    )
    return (
        f'{main_links}'
        '<div class="drop">'
        '<a class="drop-trigger" href="#">Services</a>'
        f'<div class="drop-panel">{services_links}</div>'
        '</div>'
        '<div class="drop">'
        '<a class="drop-trigger" href="#">Policies</a>'
        f'<div class="drop-panel">{policies_links}</div>'
        '</div>'
    )


def output_path_for(route: str) -> Path:
    if not route:
        return Path('index.html')
    return Path(route) / 'index.html'


def build_page(route: str, title: str, blocks):
    if route in manual_page_text and not blocks:
        blocks = manual_page_text[route]

    cleaned_blocks = [clean_line(b) for b in blocks if clean_line(b)]
    lead = pick_lead(cleaned_blocks)
    content_html = render_content(cleaned_blocks)

    prefix = root_prefix(route)
    nav_html = render_nav(route)

    home_services = render_home_services(route) if route == '' else ''

    html_doc = f'''<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{escape(title)} | {SITE_TITLE}</title>
  <meta name="description" content="{escape(SITE_TAGLINE)}">
  <link rel="icon" type="image/png" sizes="64x64" href="{prefix}assets/logos/APES_Pet_Care_Clinic_logo_web_64px.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{prefix}assets/css/styles.css">
  <script defer src="{prefix}assets/js/site.js"></script>
</head>
<body>
  <header class="site-header">
    <div class="header-wrap">
      <a class="brand" href="{href_to('', route)}">
        <img src="{prefix}assets/logos/APES_Pet_Care_Clinic_logo_web_128px.png" alt="APES Pet Care Clinic logo">
        <div class="brand-copy">
          <span class="brand-title">APES Pet Care Clinic</span>
          <span class="brand-subtitle">Compassion first, for every species.</span>
        </div>
      </a>
      <button class="menu-toggle" aria-expanded="false" data-menu-toggle>Menu</button>
      <nav class="main-nav" data-main-nav>
        {nav_html}
      </nav>
    </div>
  </header>

  <div class="notice reveal">{escape(NOTICE)}</div>

  <main class="page">
    <section class="hero">
      <article class="hero-panel reveal">
        <p class="page-kicker">{escape(page_kicker(route))}</p>
        <h1 class="hero-title">{escape(title)}</h1>
        <p class="hero-lead">{escape(lead)}</p>
        <div class="hero-badges">
          <span>Low-income friendly care</span>
          <span>Exotic and domestic support</span>
          <span>Booking-first appointments</span>
        </div>
      </article>
      <aside class="hero-logo reveal">
        <img src="{prefix}assets/logos/APES_Pet_Care_Clinic_logo_master_transparent.png" alt="APES Pet Care Clinic illustrated logo">
      </aside>
    </section>

    {home_services}

    <section class="content-layout">
      <article class="article">
        {content_html}
      </article>
      <aside class="side">
        <div class="side-card reveal">
          <h3>Need Help Fast?</h3>
          <p>Our clinic team can guide you on routine care, first-aid support, and when a veterinary referral is needed.</p>
          <p><strong>Phone:</strong> {escape(PHONE)}<br><strong>Email:</strong> {escape(EMAIL)}</p>
          <p><strong>Address:</strong> {escape(ADDRESS)}</p>
          <div class="cta-group">
            <a class="btn btn-primary" href="{href_to('bookings', route)}">Book Appointment</a>
            <a class="btn btn-outline" href="{href_to('contact', route)}">Contact Clinic</a>
            <a class="btn btn-outline" href="{href_to('donate', route)}">Donate to Support Care</a>
          </div>
        </div>
      </aside>
    </section>
  </main>

  <footer class="page-footer">
    <div class="footer-wrap">
      <strong>APES Pet Care Clinic</strong>
      <span>Helping people in poverty or low incomes to keep their pets healthy and safe.</span>
      <span>{escape(ADDRESS)} | {escape(PHONE)} | <a href="mailto:{escape(EMAIL)}">{escape(EMAIL)}</a></span>
      <span>Part of Association of Protecting Exotic Species CIC.</span>
    </div>
  </footer>
</body>
</html>
'''

    out = output_path_for(route)
    out.parent.mkdir(parents=True, exist_ok=True)
    out.write_text(html_doc, encoding='utf-8')


page_index = []
for page in pages:
    route = normalize_route(page['url'])
    raw_title = page['title']
    title = clean_line(re.sub(r'\s*\|\s*APES Pet Care Clinic.*$', '', raw_title))
    if not title:
        title = SITE_TITLE

    blocks = page.get('content_blocks', [])
    build_page(route, title, blocks)
    page_index.append((route, title, page['url']))

# Build a simple sitemap page
sitemap_items = []
for route, title, source_url in sorted(page_index, key=lambda x: x[0]):
    link = './' if route == '' else f"{encode_route(route)}/"
    sitemap_items.append(f'<li><a href="{link}">{escape(title)}</a> <small>(source: {escape(source_url)})</small></li>')

sitemap = f'''<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site Map | {SITE_TITLE}</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <main class="page">
    <section class="hero">
      <article class="hero-panel">
        <p class="page-kicker">Rebuilt Site Map</p>
        <h1 class="hero-title">All Cloned Pages</h1>
        <p class="hero-lead">This page lists each recreated route captured from the live website crawl.</p>
      </article>
      <aside class="hero-logo"><img src="assets/logos/APES_Pet_Care_Clinic_logo_web_128px.png" alt="APES logo"></aside>
    </section>
    <section class="content-layout">
      <article class="article">
        <div class="content-card">
          <h2>Pages</h2>
          <ol>{''.join(sitemap_items)}</ol>
        </div>
      </article>
    </section>
  </main>
</body>
</html>
'''
Path('sitemap.html').write_text(sitemap, encoding='utf-8')
print(f'Generated {len(page_index)} pages and sitemap.')
