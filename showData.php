<?php header('Content-type: text/plain; charset=utf-8');

	if(isset($_POST['searchQuery']))
		{
		  require_once('localhost_pdo.php');
		  $txt = html_entity_decode(preg_replace("/U\+([0-9A-F]{4})/", "&#x\\1;",$_POST['searchQuery']), ENT_NOQUOTES, 'UTF-8');

		  
		  $sql = "SELECT * FROM detailcomplain  WHERE IdCode = :search_query  ORDER BY `detailcomplain`.`ID` DESC";
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