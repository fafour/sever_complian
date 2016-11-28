<?php header('Content-type: text/plain; charset=utf-8');
		
 		require_once('localhost.php');

		  $username=$_POST['username'];
		  $password=$_POST['password'];

	      $sql = "UPDATE login SET Password='$password' WHERE Username='$username' ";

	   	if(mysqli_query($conn,$sql)){
		 	echo "เปลี่ยนรหัสเสร็จสิ้น";
		 }else{
		 echo "ไม่สามารถเปลี่ยนรหัสได้";
		 }
		
?>