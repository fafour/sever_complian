<?php header('Content-type: text/plain; charset=utf-8');
		  
 		  require_once('localhost.php');   	  
		  $SurNameUser=$_POST['SurNameUser'];
		  $NameUser=$_POST['NameUser'];
		  $Username=$_POST['Username'];
	      $sql = "UPDATE login SET NameUser='$NameUser',SurNameUser='$SurNameUser' WHERE Username='$Username' ";

	   	if(mysqli_query($conn,$sql)){
		 	echo "แก้ไขข้อมูลเสร็จสิ้น";
		 }else{
		 echo "	ไม่สามารถแก้ไข้ข้อมูลได้";
		 }
		
	
		

?>