<?php 

	/*$link = mysqli_connect("localhost", "onlinenotes", "Success12#", "onlinenotes");

	if(mysqli_connect_error()) {
		die("ERROR: Unable to connect to the database" . mysqli_connect_error());
	}*/

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["localhost"];
	$username = $url["onlinenotes"];
	$password = $url["Success12#"];
	$db = substr($url["onlinenotes"], 1);

	$link = new mysqli($server, $username, $password, $db);

?>