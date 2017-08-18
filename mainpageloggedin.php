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
			<li><a href="#">Profile <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Help</a></li>
			<li><a href="#">Contact Us</a></li>
			<li class="active"><a href="#">My Songs</a></li>
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
    			<div class="buttons">
    				<button id="addNote" type="button" class="btn btn-lg btn-info">
    					Add Song
    				</button>
    				
    				<button id="editNote" type="button" class="btn btn-lg btn-warning pull-right">
    					Edit Song
    				</button>
    				
    				<button id="doneNote" type="button" class="btn btn-lg btn-success pull-right">
    					Done
    				</button>
    				
    				<button id="allNotes" type="button" class="btn btn-lg btn-info">
    					All Songs
    				</button>
    			</div>
    			
    			<div id="notepad">
    				<textarea name="" id="" cols="30" rows="10"></textarea>
    			</div>
    			
    			<div id="notes" class="notes">
<!--    				Ajax Call to PHP File -->
    			</div>
    		</div>
    	</div>
    </div>
    
    
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