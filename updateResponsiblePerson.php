<?php header('Content-type: text/plain; charset=utf-8');
	     require_once('localhost.php');

  // array for JSON response
	   	  
		  $responsiblePerson=$_POST['responsiblePerson'];
		  
		  $idcode=$_POST['idcode'];
	      $sql = "UPDATE detailcomplain SET responsiblePerson='$responsiblePerson' WHERE IdCode='$idcode' ";

	   	if(mysqli_query($conn,$sql)){
		 	echo "แก้ไขข้อมูลเสร็จสิ้น";
		 }else{
		 echo "	ไม่สามารถแก้ไข้ข้อมูลได้";
		 }
		
	
		

?>