import time
from makeRequest import makeRequest
from send_email import send_email
#import datetime

def programSleep():
	toSleep = 86400
	time.sleep(toSleep)

def printTerminal(message):
	print "[+] " + str(message)

printTerminal("Starting Daily Checker..")

while(True):
	printTerminal("Checking Time..")

	#FOR FUTURE DEV
	#if time.strftime("%H:%M", time.gmtime()) == "18:00":

	#Make Request
	printTerminal("Making GET request..")
	req = makeRequest()
	url = "http://kiransprojects.co.uk/PlacementLogger/api/getLatest.php"
	date = req.request(url).read()

	#Check todays date
	todays_date = time.strftime("%Y-%m-%d")

	print date 
	print todays_date

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
#else:
	#printTerminal("[+] Not Timeq")





	

