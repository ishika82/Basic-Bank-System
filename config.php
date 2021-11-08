<?php
	// development connection
	// $conn = mysqli_connect('localhost','root','','sparks_bank');

	// remote database connection
	$conn = mysqli_connect('remotemysql.com','3iJXEwYoYa','8HWO1bRCIj','3iJXEwYoYa');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>