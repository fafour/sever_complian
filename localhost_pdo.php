<?php header('Content-type: text/plain; charset=utf-8');
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "projecttest";

	try {
	    	$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    	$connection -> exec("SET CHARACTER SET utf8");
	    }
	catch(PDOException $e)
	    {
	    	die("OOPs something went wrong");
	    }
	
?>