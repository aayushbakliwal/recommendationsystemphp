<?php
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'recommendation_system';

	$link = mysqli_connect("$hostname", "$username", "$password","$database");
		if (!$link) {
			echo "<p>Could not connect to the server '" . $hostname . "'</p>\n";
        	echo mysql_error();
		}else{
			echo "<p>Successfully connected to the server '" . $hostname ." and ".$database."'</p>\n";
        } 
        ?>