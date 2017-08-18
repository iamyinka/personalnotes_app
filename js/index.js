/*Ajax Call Once user signs up
Once form submitted
	Prevent default php processing
	collect user inputs
	Send to signup.php using Ajax
		Ajax call successful? Show Error or Success Msg
		Ajax Call fails? Show Ajax call error*/

$("#signUpForm").submit(function(event){
	event.preventDefault();
	var dataToPost = $(this).serializeArray();
	console.log(dataToPost);
	$.ajax({
		url: "signup.php",
		type: "POST",
		data: dataToPost,
		success: function(data) {
			if(data){
				$("#signUpMsg").html(data);
			}
		},
		error: function() {
			$("#signUpMsg").html('<div class="alert alert-danger">There was an error with the AJAX Call. Please try again later.</div>');
		}
	});
})


/*Ajax Call for login form
Once login submitted
	prevent php default processing
	collect user inputs
	Send login to login.php using AJAX
	Ajax Successful?
		if php files returns "Success"? Redirect user to notes page
	AJAX call fails? Show AJAX call error

Ajax Call for Forgot password Form
Once form submitted
	Prevent default php processing
	Collect user inputs
	Send to login.php using AJAX
		Ajax Successful? Show error/success msgs
		AJAX fails? Show Ajax call error*/

