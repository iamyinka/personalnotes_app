<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Profile</title>

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
    <style>
		#container {
			margin-top: 150px;
		}  
		
		#notepad, #allNotes, #doneNote {
			display: none;
		}
		
		.buttons {
			margin-bottom: 20px;
		}
		
		textarea {
			width: 100%;
			max-width: 100%;
			font-size: 1.2em;
/*			font-family: "Satisfy", sans-serif;*/
			border-left-width: 20px;
			border-color: bisque;
			color:cadetblue;
			background-color: #eee;
			padding: 10px;
		}

		h2 {
			color: #fff;
		}

		table {
			color: orange;
			font-weight: 700;
		}

		tr {
			cursor: pointer;
		}
	</style>
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
			<li class="active"><a href="#">Profile <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Help</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">My Songs</a></li>
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
		  	<li><a href="#">Logged in as <span class="loggedin">Netguru Online</span></a></li>
			<li><a href="#">Log Out</a></li>

		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
    
    <div class="container" id="container">
    	<div class="row">
    		<div class="col-md-6 col-md-offset-3 col-sm-12">
    			<h2>Profile Settings</h2>
    			
    			<div class="table-responsive">
    				<table class="table table-hover table-bordered">
    					<tr data-target="#updateUsername" data-toggle="modal">
	    					<td>Username</td>
	    					<td>value</td>
	    				</tr>
	    				<tr data-target="#updateEmail" data-toggle="modal">
	    					<td>Email Address</td>
	    					<td>value</td>
	    				</tr>
	    				<tr data-target="#updatePassword" data-toggle="modal">
	    					<td>Password</td>
	    					<td>hidden</td>
	    				</tr>
    				</table>
    			</div>
    		</div>
    	</div>
    </div>
    
    
<!--    Update Username Form Section  -->
    
    <form action="" method="POST" role="form" id="updateUsernameForm">
		<div class="modal fade" id="updateUsername" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Username:</h4>
			  </div>
			  <div class="modal-body">
		  	  		
<!--		  	  		Login Notification Msgs-->
		  	  		<div id="loginMsg">
		  	  			
		  	  		</div>
		  	  
				  <div class="form-group">
					<label for="username" class="sr-only">Username</label>
					<input type="text" class="form-control" id="username" name="username"  maxlength="30" value="username value">
				  </div>
				 
				
			  </div>
			  <div class="modal-footer">
			  	<input type="submit" class="btn btn-success" name="updateUsername" value="Update Username">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			  </div>
			</div>
		  </div>
		</div>
		
	</form>




	<!--    Update Email Form Section  -->
    
    <form action="" method="POST" role="form" id="updateEmailForm">
		<div class="modal fade" id="updateEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Email:</h4>
			  </div>
			  <div class="modal-body">
		  	  		
<!--		  	  		Login Notification Msgs-->
		  	  		<div id="loginMsg">
		  	  			
		  	  		</div>
		  	  
				  <div class="form-group">
					<label for="email" class="sr-only">Email Address</label>
					<input type="email" class="form-control" id="email" name="email"  maxlength="50" value="Email value">
				  </div>
				 
				
			  </div>
			  <div class="modal-footer">
			  	<input type="submit" class="btn btn-success" name="updateEmail" value="Update Email Address">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			  </div>
			</div>
		  </div>
		</div>
		
	</form>



	<!--    Update Password Form Section  -->
    
    <form action="" method="POST" role="form" id="updatePasswordForm">
		<div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Change Password:</h4>
			  </div>
			  <div class="modal-body">
		  	  		
<!--		  	  		Login Notification Msgs-->
		  	  		<div id="loginMsg">
		  	  			
		  	  		</div>

	  	  		<div class="form-group">
					<label for="currentPassword" class="sr-only">Current Password</label>
					<input type="password" class="form-control" id="currentPassword" name="currentPassword"  maxlength="30" placeholder="Current Password">
				  </div>

				  <div class="form-group">
					<label for="password" class="sr-only">New Password</label>
					<input type="password" class="form-control" id="password" name="password"  maxlength="30" placeholder="New Password">
				  </div>
		  	  
				  <div class="form-group">
					<label for="password2" class="sr-only">New Password</label>
					<input type="password" class="form-control" id="password2" name="password2"  maxlength="30" placeholder="Confirm New Password">
				  </div>
				 
				
			  </div>
			  <div class="modal-footer">
			  	<input type="submit" class="btn btn-success" name="updatePassword" value="Change Password">
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
  </body>
</html>