import urllib.request
url='https://www.apespetcare.org.uk/dog-care'
with urllib.request.urlopen(url, timeout=30) as r:
    data = r.read()
print('bytes', len(data))
text = data.decode('utf-8', errors='replace')
print(text[text.find('Flea Treatment')-120:text.find('Flea Treatment')+220])
