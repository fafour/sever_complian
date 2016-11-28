<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	
	
	 $name= 'ช';
	 

	 $sql = "SELECT * FROM detaildoctor WHERE name LIKE '%".$name."%' ";
	 $r = mysqli_query($conn,$sql);
	 $res = mysqli_fetch_array($r); 
	 $result = array();	 
	 array_push($result,array(
		 "name"=>$res['name']
		 )
	 );
	 
	 echo json_encode(array("result"=>$result));
	 
	 
	 
	
	
	mysqli_close($conn);
?>