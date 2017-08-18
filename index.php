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
    		<h1>A Library of Songs' lyrics for the BCC Choir</h1>
    	
			<p>Your song lyrics with you wherever you may be!</p>

			<p class="quoted">&mdash; Music is an important part of worship and praise to God</p>
   	
   			<button type="button" href="#" class="btn btn-custom" data-toggle="modal" data-target="#signUpModal">Sign Up - It's Free!!!</button>
    	</div>
    </section>
    
<!--    Sign UP Section-->
    
    <form action="" method="POST" role="form" id="signUpForm">
		<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Sign up &amp; start saving your song lyrics</h4>
			  </div>
			  <div class="modal-body">
		  	  		
<!--		  	  		Sign Up Notification Msgs-->
		  	  		<div id="signUpMsg">
		  	  			
		  	  		</div>
		  	  
			  	  <div class="form-group">
					<label for="username" class="sr-only">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" maxlength="30">
				  </div>
				  <div class="form-group">
					<label for="email" class="sr-only">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
				  </div>
				  <div class="form-group">
					<label for="password" class="sr-only">Choose a Password</label>
					<input type="password" class="form-control" id="password" placeholder="Choose a Password" name="password">
				  </div>
				  <div class="form-group">
					<label for="password2" class="sr-only">Confirm Password</label>
					<input type="password" class="form-control" id="password2" placeholder="Confirm Password" name="password2" maxlength="30">
				  </div>
				
			  </div>
			  <div class="modal-footer">
			  	<input type="submit" class="btn btn-custom" name="signup" value="Sign Up">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			  </div>
			</div>
		  </div>
		</div>
		
	</form>
    
    
    
<!--    Login Form Section  -->
    
    <form action="" method="POST" role="form" id="loginForm">
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Log In</h4>
			  </div>
			  <div class="modal-body">
		  	  		
<!--		  	  		Login Notification Msgs-->
		  	  		<div id="loginMsg">
		  	  			
		  	  		</div>
		  	  
				  <div class="form-group">
					<label for="loginEmail" class="sr-only">Email address</label>
					<input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email Address">
				  </div>
				  <div class="form-group">
					<label for="loginPassword" class="sr-only">Enter Password</label>
					<input type="password" class="form-control" id="loginPassword" placeholder="Enter Password" name="loginPassword">
				  </div>
			  	  
				  <div class="checkbox">
					<label>
					  <input type="checkbox" name="rememberMe" id="rememberMe"> Remember me
					</label>
					
					<a href="#pwdResetModal" class="pull-right" data-dismiss="modal" data-target="#pwdResetModal" data-toggle="modal">Forgot your password?</a>
				  </div>

				
			  </div>
			  <div class="modal-footer">
				  <button type="button" class="btn btn-custom pull-left" name="signup" data-dismiss="modal" data-target="#signUpModal" data-toggle="modal">Sign Up</button>
			  	<input type="submit" class="btn btn-success" name="login" value="Log In">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			  </div>
			</div>
		  </div>
		</div>
		
	</form>

   
   
   
   
   <!--    Forgot Your Password Section  -->
    
    <form action="" method="POST" role="form" id="pwdResetForm">
		<div class="modal fade" id="pwdResetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Request A New Password</h4>
			  </div>
			  <div class="modal-body">
		  	  		
<!--		  	  		Forgot Notification Msgs-->
		  	  		<div id="pwdResetMsg">
		  	  			
		  	  		</div>
		  	  
				  <div class="form-group">
					<label for="forgotEmail" class="sr-only">Email address</label>
					<input type="email" class="form-control" id="forgotEmail" name="forgotEmail" placeholder="Email Address">
				  </div>

				
			  </div>
			  <div class="modal-footer">
				  <button type="button" class="btn btn-custom pull-left" name="signup" data-dismiss="modal" data-target="#signUpModal" data-toggle="modal">Sign Up</button>
			  	<input type="submit" class="btn btn-success" name="forgotPassword" value="Reset Password">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			  </div>
			</div>
		  </div>
		</div>
		
	</form>
    
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