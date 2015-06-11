import time
from makeRequest import makeRequest

def programSleep():
	toSleep = 86400
	time.sleep(toSleep)


while(True):

	#Make Request
	$req = makeRequest()
	url = "http://kiransprojects.co.uk/PlacementLogger/api/getLatest.php"
	date = $req.request(url)

	#Check todays date
	todays_date = time.strftime("%Y-%m-%d")

	if(todays_date != date):
		#send email to notify

	
	#Sleep
	programSleep()


