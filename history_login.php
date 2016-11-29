<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$date_time = isset($_POST['date_time']) ? $_POST['date_time'] : '';

	

	mysqli_set_charset($conn,"utf8");
	$query = mysqli_query($conn, "insert into historylogin (username, date_time) values ('$username' ,'$date_time') ");

	mysqli_close($conn);
?>