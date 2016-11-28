<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	

	 $sql = "SELECT * FROM  login WHERE Status = '1' AND (Level ='1' OR Level = '2') " ;
	 $r = mysqli_query($conn,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		array_push($result,array(
			'Username'=>$row['Username'],
			
		));
	}
	
	echo json_encode(array('result'=>$result));
	 

	mysqli_close($conn);
	

?>