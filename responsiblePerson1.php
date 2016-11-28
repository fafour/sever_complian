<?php header('Content-type: text/plain; charset=utf-8');
		  require_once('localhost_pdo.php');
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