<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "projecttest";

	try {
			ini_set('display_errors', true);
			header('Content-Type: text/html; charset=utf-8');
	    	$connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password,
	    		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    	$connection -> exec("SET CHARACTER SET utf8");

	    	if(!empty($_POST['searchQuery']))
				{
				  $txt = html_entity_decode(preg_replace("/U\+([0-9A-F]{4})/", "&#x\\1;",$_POST['searchQuery']), ENT_NOQUOTES, 'UTF-8');
				  $todaysDate = date('m');

				  $search_query='%' . $txt . '%';
				  $sql = "SELECT * FROM detailcomplain  WHERE 
				  			( IdPeople LIKE :search_query 
					     or Main   LIKE :search_query
					     or responsiblePerson   LIKE :search_query
					     or NameDoctor   LIKE :search_query
					     or IdCode    LIKE :search_query )  
					     AND  AtDay LIKE '__/$todaysDate/____'  ORDER BY `detailcomplain`.`ID` DESC ";
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
			}
	    }
	catch(PDOException $e)
	    {
	    	die("OOPs something went wrong");
	    }

	

?>