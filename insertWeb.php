<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');
	$com_code = isset($_POST['com_code']) ? $_POST['com_code'] : '';
	$com_card_number = isset($_POST['com_card_number']) ? $_POST['com_card_number'] : '';
	$com_title_name = isset($_POST['com_title_name']) ? $_POST['com_title_name'] : '';
	$com_name = isset($_POST['com_name']) ? $_POST['com_name'] : '';
	$com_lname = isset($_POST['com_lname']) ? $_POST['com_lname'] : '';
	$no_address = isset($_POST['no_address']) ? $_POST['no_address'] : '';
	$alley = isset($_POST['alley']) ? $_POST['alley'] : '';
	$road = isset($_POST['road']) ? $_POST['road'] : '';
	$district = isset($_POST['district']) ? $_POST['district'] : '';
	$prefecture = isset($_POST['prefecture']) ? $_POST['prefecture'] : '';
	$province = isset($_POST['province']) ? $_POST['province'] : '';
	$zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : '';
	$relevance = isset($_POST['relevance']) ? $_POST['relevance'] : '';
	$com_tel = isset($_POST['com_tel']) ? $_POST['com_tel'] : '';
	$com_email = isset($_POST['com_email']) ? $_POST['com_email'] : '';
	$com_date = isset($_POST['com_date']) ? $_POST['com_date'] : '';
	$com_status = isset($_POST['com_status']) ? $_POST['com_status'] : '';
	$authority_id = isset($_POST['authority_id']) ? $_POST['authority_id'] : '';
	$PhoneHome = isset($_POST['PhoneHome']) ? $_POST['PhoneHome'] : '';
	$responsiblePerson = isset($_POST['responsiblePerson']) ? $_POST['responsiblePerson'] : '';
	$Main = isset($_POST['Main']) ? $_POST['Main'] : '';

	mysqli_set_charset($conn,"utf8");
	$query = mysqli_query($conn, "insert into tb_complaint ( com_code, com_card_number, com_title_name ,com_name ,com_lname ,no_address , alley , road ,district ,prefecture ,province ,zip_code ,relevance ,com_tel,com_email,com_date,com_status,authority_id,PhoneHome,responsiblePerson,Main) values ( '$com_code' ,'$com_card_number' ,'$com_title_name' ,'$com_name' ,'$com_lname','$no_address','$alley','$road','$district','$prefecture','$province','$zip_code','$relevance','$com_tel','$com_email','$com_date','$com_status','$authority_id','$PhoneHome','$responsiblePerson','$Main') ");
	


	
	
	mysqli_close($conn);
?>