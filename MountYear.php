<?php header('Content-type: text/plain; charset=utf-8');

	if(isset($_POST['searchQuery']) && isset($_POST['searchQuery1']))
		{
		  require_once('localhost_pdo.php');
		  $search_query=$_POST['searchQuery'];
		  $search_query1=$_POST['searchQuery1'];
		  $sql = "SELECT * FROM detailcomplain  where AtDay LIKE '$search_query1-$search_query-__'  ORDER BY `detailcomplain`.`ID` DESC ";
		  $statement = $connection->prepare($sql);
		  $statement->bindParam(':search_query', $search_query, PDO::PARAM_STR);
		  $statement->bindParam(':search_query1', $search_query1, PDO::PARAM_STR);
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