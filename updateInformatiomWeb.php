<?php header('Content-type: text/plain; charset=utf-8');
		  require_once('localhost.php');
		  $detail_complaint = isset($_POST['detail_complaint']) ? $_POST['detail_complaint'] : '';
		  $hospital = isset($_POST['hospital']) ? $_POST['hospital'] : '';
		  $comID = isset($_POST['comID']) ? $_POST['comID'] : '';

		  $idCode=$_POST['idCode'];
	      $sql = "UPDATE tb_information SET 
	      			detail_complaint='$detail_complaint' ,
	      			hospital='$hospital'
	      		WHERE comID='$comID' ";

	   	if(mysqli_query($conn,$sql)){
		 	
		 }else{
		
		 }
?>