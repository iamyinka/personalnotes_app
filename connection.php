<?php 

	$link = mysqli_connect("localhost", "onlinenotes", "Success12#", "onlinenotes");

	if(mysqli_connect_error()) {
		die("ERROR: Unable to connect to the database" . mysqli_connect_error());
	}

?>