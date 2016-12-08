<?php header('Content-type: text/plain; charset=utf-8');
	if(isset($_POST['searchQuery']))
		{
		  require_once('localhost_pdo.php');
		  $search_query=$_POST['searchQuery'];
		  $sql = "DELETE FROM tb_doctor  WHERE FK_com_id = :search_query";
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
			  	$result="false";
          }
		  
	    }

?>