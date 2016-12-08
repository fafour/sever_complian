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
		  $PhoneHome = isset($_POST['PhoneHome']) ? $_POST['PhoneHome'] : '';
		  $Main = isset($_POST['Main']) ? $_POST['Main'] : '';


		  $idCode=$_POST['idCode'];
	      $sql = "UPDATE tb_complaint SET 
	      		com_card_number='$com_card_number' , 
	      		com_title_name='$com_title_name'  , 
	      		com_name='$com_name' ,
	      		com_lname='$com_lname' ,
	      		no_address='$no_address' ,
	      		alley='$alley' ,
	      		road='$road' ,
	      		district='$district' ,
	      		prefecture='$prefecture' ,
	      		province='$province' ,
	      		zip_code='$zip_code' ,
	      		relevance='$relevance' ,
	      		com_tel='$com_tel' ,
	      		com_email='$com_email' ,
	      		PhoneHome='$PhoneHome' ,
	      		Main='$Main' 
	      		WHERE com_code='$com_code' ";

	   	if(mysqli_query($conn,$sql)){
		 	
		 }else{
		
		 }
				

?>