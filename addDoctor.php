<?php header('Content-type: text/plain; charset=utf-8');
  require_once('localhost_pdo.php');
  $sql = "SELECT * FROM detaildoctor";
  $statement = $connection->prepare($sql);
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