<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	$doc_title = isset($_POST['doc_title']) ? $_POST['doc_title'] : '';
	$doc_name = isset($_POST['doc_name']) ? $_POST['doc_name'] : '';
	$doc_lname = isset($_POST['doc_lname']) ? $_POST['doc_lname'] : '';
	$doc_code = isset($_POST['doc_code']) ? $_POST['doc_code'] : '';

	$FK_com_id = isset($_POST['FK_com_id']) ? $_POST['FK_com_id'] : '';
	
	mysqli_set_charset($conn,"utf8");
	$query = mysqli_query($conn, "insert into tb_doctor ( doc_title ,doc_name ,doc_lname,doc_code,FK_com_id) values ( '$doc_title','$doc_name','$doc_lname','$doc_code', '$FK_com_id') ");
	
	
	mysqli_close($conn);
?>