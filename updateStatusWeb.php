<?php header('Content-type: text/plain; charset=utf-8');
		  require_once('localhost.php');
		  $com_status = isset($_POST['com_status']) ? $_POST['com_status'] : '';
		  $com_code = isset($_POST['com_code']) ? $_POST['com_code'] : '';

		  $idCode=$_POST['idCode'];
	      $sql = "UPDATE tb_complaint SET 
	      			com_status='$com_status' 
	      		WHERE com_code='$com_code' ";

	   	if(mysqli_query($conn,$sql)){
		 	
		 }else{
		
		 }
				

?>