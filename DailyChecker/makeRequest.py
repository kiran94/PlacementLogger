import urllib2

class makeRequest:

	def __init__(self):
		pass

	def request(self, url):
		return urllib2.urlopen(url)

