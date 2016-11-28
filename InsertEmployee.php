<?php header('Content-type: text/plain; charset=utf-8');
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "projecttest";
	$conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
	if($conn){
		echo "success";
	}else{
		echo "Connect fail";
	}
	$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
	$NameUser = isset($_POST['NameUser']) ? $_POST['NameUser'] : '';
	$SurNameUser = isset($_POST['SurNameUser']) ? $_POST['SurNameUser'] : '';
	$Level= isset($_POST['Level']) ? $_POST['Level'] : '';
	$Status= isset($_POST['Status']) ? $_POST['Status'] : '';

	

	mysqli_set_charset($conn,"utf8");
	$query = mysqli_query($conn, "insert into login (Username, Password, NameUser ,SurNameUser ,Level ,Status) values ('$Username' ,'$Password' ,'$NameUser' ,'$SurNameUser' ,'$Level' ,'$Status') ");

	mysqli_close($conn);
?>