<?php  header('Content-type: text/plain; charset=utf-8');

	    	if(!empty($_POST['searchQuery']))
				{
				  require_once('localhost_pdo.php');
				  $txt = html_entity_decode(preg_replace("/U\+([0-9A-F]{4})/", "&#x\\1;",$_POST['searchQuery']), ENT_NOQUOTES, 'UTF-8');

				  $search_query='%' . $txt . '%';
				  $sql = "SELECT * FROM detaildoctor  WHERE name LIKE :search_query
					     or surname   LIKE :search_query
					     or numbercode   LIKE :search_query
					     or hospital    LIKE :search_query ";
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

	

?>