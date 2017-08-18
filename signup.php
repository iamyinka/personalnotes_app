<?php 
	@ob_start();
	session_start();

	include('connection.php');

	$missingUsername = "<p><strong>Please enter a username</strong></p>";
	$missingEmail = "<p><strong>Please enter an email address</strong></p>";
	$invalidEmail = "<p><strong>Please enter a valid email address</strong></p>";
	$missingPassword = "<p><strong>Please enter a password</strong></p>";
	$invalidPassword = "<p><strong>Your password should be at least 6 letters  &amp; include a Capital &amp; a number.</strong></p>";
	$differentPassword = "<p><strong>Passwords mis-match!</strong></p>";
	$missingPassword2 = "<p><strong>Please confirm your password</strong></p>";

	if(empty($_POST["username"])) {
		$errors .= $missingUsername;
	} else {
		$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
	}

	if(empty($_POST["email"])) {
		$errors .= $missingEmail;
	} else {
		$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors .= $invalidEmail;
		}
	}

	if(empty($_POST["password"])) {
		$errors .= $missingPassword;
	} elseif(!(strlen($_POST["password"]) > 6 and preg_match('/[A-Z]/', $_POST["password"]) and preg_match('/[0-9]/', $_POST["password"])
			  )
			) {
		$errors .= $invalidPassword;
	} else {
		$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
		
		if(empty($_POST["password2"])) {
			$errors .= $missingPassword2;
		} else {
			$password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
			if($password !== $password2) {
				$errors .= $differentPassword;
			}
		}
	}


	if($errors) {
		$resultMessage = "<div class='alert alert-danger'>" . $errors . "</div>";
		echo $resultMessage;
	}



	$username = mysqli_real_escape_string($link, $username);

	$email = mysqli_real_escape_string($link, $email);
	
	$password = mysqli_real_escape_string($link, $password);
//	$password = md5($password);
	$password = hash('sha256', $password);


	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($link, $sql);

	if(!$result) {
		echo '<div class="alert alert-danger">Error running the query!</div>';
		/*echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';*/
		exit;
	}

	$results = mysqli_num_rows($result);

	if($results) {
		echo '<div class="alert alert-danger">Username already exists! Perhaps try loggin in.</div>';
		exit;
	}

	

	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($link, $sql);

	if(!$result) {
		echo '<div class="alert alert-danger">Error running the query!</div>';
		exit;
	}

	$results = mysqli_num_rows($result);

	if($results) {
		echo '<div class="alert alert-danger">Email already exists! Perhaps try loggin in.</div>';
		exit;
	}


	$activationKey = bin2hex(openssl_random_pseudo_bytes(16));

	$sql = "INSERT into users (`username`, `email`, `password`, `activation`) VALUES ('$username', '$email', '$password', '$activationKey')";

	$result = mysqli_query($link, $sql);

	if(!$result) {
		echo '<div class="alert alert-danger">Error saving user details into the database.</div>';
		exit;
	}


	$message = "Please follow the link to activate your account:\n\n";
	$message .= "http://localhost:8000/activate.php?email=" . urlencode($email) . "&key=$activationKey";

	if(mail($email, 'Confirm your registration', $message, 'From: ' . 'perpetualcoder@gmail.com')) {
		echo '<div class="alert alert-success">Thank you for registering. Please follow the activation instructions sent to your ' . $email . '.</div>';
	}

?>






<!--Start Session
Connect to database


Check User Inputs
	Define error messages
	Get Username, email, password and password2
	Store errors in errors variable
	If there are any errors - print error
	
No errors?
	Prepare variables for the queries
	If username exits in the users table print error
	else
		If email exits, print error
	else
		Create a unique activation code
		Insert user details and activation code in the users table
		send the user an email with a link to activate.php with their email and activation code-->