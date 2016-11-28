<?php header('Content-type: text/plain; charset=utf-8');
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "projecttest";
	$conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
	mysqli_set_charset($conn,"utf8");
	
	
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