<!--If user is not logged and remember me cookie exists?
	extract $authentificator 1 & 2 from the cookie
	look for authentificator 1 in the remember me table
	if authentificator2 doesn't match
		print error
	else
		generate new authentificators
		store them in the cookie and rememberme tables
		log the user in and redirect to notes page-->