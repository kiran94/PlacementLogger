import time
from makeRequest import makeRequest
import send_email

def programSleep():
	toSleep = 86400
	time.sleep(toSleep)

def printTerminal(message):
	print "[+] " + str(message)

printTerminal("Starting Daily Checker..")

while(True):
	#Make Request
	printTerminal("Making GET request..")
	$req = makeRequest()
	url = "http://kiransprojects.co.uk/PlacementLogger/api/getLatest.php"
	date = $req.request(url)

	#Check todays date
	todays_date = time.strftime("%Y-%m-%d")

	printTerminal("Comparing Dates..")
	if(todays_date != date):
		#send email to notify
		printTerminal("Sending email..")
		send_email()
	else:
		printTerminal("Already logged today. ")


	#Sleep
	printTerminal("Program Sleeping..")
	programSleep()


