<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	

	 $sql = "SELECT * FROM  tb_status" ;
	 $r = mysqli_query($conn,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		array_push($result,array(
			'nameStatus'=>$row['st_title'],
			
		));
	}
	
	echo json_encode(array('result'=>$result));
	 

	mysqli_close($conn);
	

?>