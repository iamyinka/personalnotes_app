<!--The user is redirected to this file after clicking the activation link
Sign up link contains 2 GET parameters: email and activation keys
If email activation key is missing, show error
else
	Store them in 2 variables
	Prepare variables for the query
	Run query: set activation field to "activated" for the provided email
	if query is successful, show success message and invite user to login
else
	show error message-->