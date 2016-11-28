<?php  header('Content-type: text/plain; charset=utf-8');
	if(isset($_POST['username']) && isset($_POST['password']))
     {
		  require_once('localhost_pdo.php');
		  $result='';
	   	  $username = $_POST['username'];
          $password = $_POST['password'];
		  
		  // Query database for row exist or not
          $sql = 'SELECT Level,Status FROM login WHERE  Username = :username AND Password = :password';
          $stmt = $connection->prepare($sql);
          $stmt->bindParam(':username', $username, PDO::PARAM_STR);
          $stmt->bindParam(':password', $password, PDO::PARAM_STR);
          $stmt->execute();
          if($stmt->rowCount())
          {
			 $row_all = $stmt->fetchall(PDO::FETCH_ASSOC);
		      header('Content-type: application/json');
		      echo json_encode($row_all);
          }  
          elseif(!$stmt->rowCount())
          {
			  	$result="false";
          }
		  
		  // send result back to android
   		  echo $result;
  	}
	 
	
?>