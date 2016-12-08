<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	$hospital = isset($_POST['hospital']) ? $_POST['hospital'] : '';
	$detail_complaint = isset($_POST['detail_complaint']) ? $_POST['detail_complaint'] : '';
	$date_scene = isset($_POST['date_scene']) ? $_POST['date_scene'] : '';
	$location = "แพทยสภา";

	$DefaultId = 0;
	 
	$GetOldIdSQL ="SELECT com_id FROM tb_complaint ORDER BY com_id DESC Limit 1";
	 
	$Query = mysqli_query($conn,$GetOldIdSQL);
	 
	while($row = mysqli_fetch_array($Query)){
	 
	 	$DefaultId = $row['com_id'];
	}
	 
	$DefaultIds = $DefaultId;


	$comID = $DefaultIds;

	mysqli_set_charset($conn,"utf8");
	$query = mysqli_query($conn, "insert into tb_information ( hospital,detail_complaint,date_scene,location,comID) values ( '$hospital','$detail_complaint','$date_scene','$location', '$comID') ");
	
	
	mysqli_close($conn);
?>