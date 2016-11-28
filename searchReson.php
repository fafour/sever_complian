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

		  $search_query='%' . $txt . '%';
		  $responsiblePerson=$_POST['responsiblePerson'];
		  $sql = "SELECT * FROM detailcomplain  WHERE 
		  			(IdPeople LIKE :search_query 
			     or Main   LIKE :search_query
			     or NameDoctor   LIKE :search_query
			     or IdCode    LIKE :search_query) AND 
			     responsiblePerson = :responsiblePerson ORDER BY `detailcomplain`.`ID` DESC 
			      ";
		  $statement = $connection->prepare($sql);
		  $statement->bindParam(':search_query', $search_query, PDO::PARAM_STR);
		  $statement->bindParam(':responsiblePerson', $responsiblePerson, PDO::PARAM_STR);
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