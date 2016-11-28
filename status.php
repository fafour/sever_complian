<?php header('Content-type: text/plain; charset=utf-8');
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "projecttest";
	$conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
	mysqli_set_charset($conn,"utf8");
	

	 $sql = "SELECT * FROM  status" ;
	 $r = mysqli_query($conn,$sql);
	
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		array_push($result,array(
			'nameStatus'=>$row['name_status'],
			
		));
	}
	
	echo json_encode(array('result'=>$result));
	 

	mysqli_close($conn);
	

?>