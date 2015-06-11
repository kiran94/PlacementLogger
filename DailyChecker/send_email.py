def send_email():
    import smtplib
    import creden

    FROM = 'Daily Checker'
    TO = ['kiran_patel94@hotmail.com'] 
    SUBJECT = "Daily Checker Notification"
    TEXT = "You have not updated your logs today do so at http://kiransprojects.co.uk/PlacementLogger/"

    # Prepare actual message
    message = """\From: %s\nTo: %s\nSubject: %s\n\n%s
    """ % (FROM, ", ".join(TO), SUBJECT, TEXT)
    try:
        #server = smtplib.SMTP(SERVER) 
        server = smtplib.SMTP("smtp.gmail.com", 587) #or port 465 doesn't seem to work!
        server.ehlo()
        server.starttls()
        server.login(gmail_user, gmail_pwd)
        server.sendmail(FROM, TO, message)
        #server.quit()
        server.close()
        print 'successfully sent the mail'
    except:
        print "failed to send mail"