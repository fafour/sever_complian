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

	if(isset($_POST['searchQuery']))
		{
		  $txt = html_entity_decode(preg_replace("/U\+([0-9A-F]{4})/", "&#x\\1;",$_POST['searchQuery']), ENT_NOQUOTES, 'UTF-8');

		  
		  $sql = "SELECT image_tag FROM imageupload  WHERE image_tag = :search_query";
		  $statement = $connection->prepare($sql);
		  $statement->bindParam(':search_query', $txt, PDO::PARAM_STR);
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
	}

?>