<?php 
@ob_start();
session_start();
include('connection.php');

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BCC Choir | Music Lyrics Library</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <nav class="navbar navbar-custom navbar-fixed-top">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">BCC Choir Songs Library</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Help</a></li>
			<li><a href="#">Contact Us</a></li>
		  </ul>
	<!--
		  <form class="navbar-form navbar-left">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>
	-->
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#loginModal" data-toggle="modal">Login</a></li>

		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
    
    <section class="jumbotron hero">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-12">
					<?php 

						if(!isset($_GET['email']) || !isset($_GET['key'])) {
							echo '<div class="alert alert-danger">ERROR! Please follow the activation link in your email.</div>';
							exit;
						}


						$email = $_GET['email'];
						$key = $_GET['key'];


						$email = mysqli_real_escape_string($link, $email);

						$key = mysqli_real_escape_string($link, $key);

						$sql = "UPDATE users SET activation = 'activated' WHERE (email = '$email' AND activation = '$key') LIMIT 1";

						$result = mysqli_query($link, $sql);


						if(mysqli_affected_rows($link) == 1) {
							echo '<div class="alert alert-success">Account successfully activated</div>';
							echo '<a href="index.php" type="button" class="btn-lg btn-success">Return to Home</a>';
						} else {
							echo '<div class="alert alert-danger">Account not activated. Pleas etry again later</div>';
						}


					?>
				</div>
			</div>
		</div>
   </section>
    
    <footer>
    	<div class="container">
    		<p><a href="http://iamyinka.com">Yinka Ash</a> &copy; Copyright 
    		<?php $today = date("Y"); echo $today; ?>.</p>
    	</div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
  </body>
</html>



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
	

