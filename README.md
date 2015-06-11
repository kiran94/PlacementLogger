# PlacementLogger
Project to help log day to day life on my university placement. 

As part of my placement year in industry I am required by my university to produce a report which will be graded. It was adviced to log my daily activities and so I am developing a web application which will aid me in this. 

The web application will be mobile friendly meaning that I can write up daily reports whilst on the go. The application will provide functionality to add new logs and then view them all. 

Installation: 

The application makes use of the LAMP stack
1. Clone the repo and host the web application on a server.
2. Use the SQL schema to create a table in a MYSQL database. 
3. Go to /api/connection_info.php and enter MYSQL details on where the table is located. 
4. Host the Python application and create a python file called "creden.py". Paste the following: 

class creden:
	gmail_user = ""
	gmail_pwd = ""
	url = ""
	youremail = ""

and enter your gmail username and password aswell as the URL of where your logs are hosted. youremail = The email you would like be to notified when you have not logged. 

NOTE: Sometimes gmail will block an application using your gmail account due to security in this case go to: https://www.google.com/settings/security/lesssecureapps

5. Run the python script using the command: sudo python main.py

Once the script is running it will check everyday to see if you have logged your day yet. If you have not it will email you to let you know you have not yet and then the URL. 

The Web application will track your logs on a daily basis and store them in a MYSQL database. 
