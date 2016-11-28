<?php header('Content-type: text/plain; charset=utf-8');
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "projecttest";
	$conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
	mysqli_set_charset($conn,"utf8");

  // array for JSON response
	   	  
	   	  
		  $username=$_POST['username'];
		  $password=$_POST['password'];

	      $sql = "UPDATE login SET Password='$password' WHERE Username='$username' ";

	   	if(mysqli_query($conn,$sql)){
		 	echo "เปลี่ยนรหัสเสร็จสิ้น";
		 }else{
		 echo "ไม่สามารถเปลี่ยนรหัสได้";
		 }
		
?>