<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "projecttest";

	try {
	    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    	$conn -> exec("SET CHARACTER SET utf8");
	    }
	catch(PDOException $e)
	    {
	    	die("OOPs something went wrong");
	    }



	if(isset($_POST['username']) && isset($_POST['password']))
     {
		  // Innitialize Variable
		  $result='';
	   	  $username = $_POST['username'];
          $password = $_POST['password'];
		  
		  // Query database for row exist or not
          $sql = 'SELECT Level,Status FROM login WHERE  Username = :username AND Password = :password';
          $stmt = $conn->prepare($sql);
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