<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');

	$DefaultId = 0;
	 
	$GetOldIdSQL ="SELECT com_id FROM tb_complaint ORDER BY com_id ASC";
	 
	$Query = mysqli_query($conn,$GetOldIdSQL);
	 
	while($row = mysqli_fetch_array($Query)){
	 
	 	$DefaultId = $row['com_id'];
	}
	 
	$DefaultIds = $DefaultId+1;
	
	
	mysqli_close($conn);
?>