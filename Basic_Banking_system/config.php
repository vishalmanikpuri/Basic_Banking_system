<?php
	//Connection
	$servername = "localhost";
	$username = "id17252897_vishal";
	$password = "M@nikpur!12345";
	$dbname = "id17252897_bbsm";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>