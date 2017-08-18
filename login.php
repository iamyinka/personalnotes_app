<!--Start session
Connect to the database


Check user inputs
	Define error messages
	Get email and password
	Store errors in errors variable
	If errors?
		Print error message
	else 
		prepare variables for the query
		Run query: check combinaton of email and password exists?
		If email and password dont match? Print error
		else
			log the user in: set session variables
			If remember me is not checked
				print success
			else
				create 2 variable $authentificator1 and $authentificator2
				Store them in a cookie
				run query to store them in rememberme table
				If query unsuccessful
					print error
				else
					print success-->