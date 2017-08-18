<!--Start session
Connect to the database

Check user inputs
	Define error messages
	Get email
	Store errors in errors variable
	If errors?
		print error messages
	else
		Prepare variables for the query
		Run query to check if the email exists in the users table
		If the email does not exists?
			print error messages
		else
			get the user id
			create a unique activation code
			insert user details and activation code in the forgotpassword table
			send email with link to resetpassword.php with user id and activation code
			if email sent successfully
				print success message-->