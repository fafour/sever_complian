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

	
		  $sql = "SELECT * FROM login  WHERE (Status = '1' OR Status = '0' ) AND (Level ='1' OR Level = '2') ";
		  $statement = $connection->prepare($sql);
		  $statement->bindParam(':search_query', $search_query, PDO::PARAM_STR);
		  $statement->execute();
		  if($statement->rowCount())
		  {
		      $row_all = $statement->fetchall(PDO::FETCH_ASSOC);
		      header('Content-type: application/json');
		      echo json_encode($row_all);

		 }  
		 elseif(!$statement->rowCount())
		 {
		     echo "no rows";
		}
	

?>