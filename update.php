<?php header('Content-type: text/plain; charset=utf-8');
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "projecttest";
	$conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
	mysqli_set_charset($conn,"utf8");

  // array for JSON response
	   	  
	   	  $idpeople=$_POST['idpeople'];
		  $tittleName=$_POST['tittleName'];
		  $name=$_POST['name'];
		  $surName=$_POST['surName'];
		  $relationship=$_POST['relationship'];
		  $phoneNumber=$_POST['phoneNumber'];
		  $email=$_POST['email'];
		  $adress=$_POST['adress'];
		  $phoneHome=$_POST['phoneHome'];
		  $nameDoctor=$_POST['nameDoctor'];
		  $hospitalName=$_POST['hospitalName'];
		  $detai=$_POST['detai'];
		  $day=$_POST['day'];
		  $main=$_POST['main'];

		  $idCode=$_POST['idCode'];
	      $sql = "UPDATE detailcomplain SET Idpeople='$idpeople' , TittleName='$tittleName' , Name='$name' , SurName='$surName' , Relationship='$relationship' ,PhoneNumber='$phoneNumber' , Email='$email' , Adress='$adress' , PhoneHome='$phoneHome' , NameDoctor='$nameDoctor' ,HospitalName='$hospitalName' ,Detai='$detai'  ,Day='$day'  ,Main='$main' WHERE IdCode='$idCode' ";

	   	if(mysqli_query($conn,$sql)){
		 	echo "แก้ไขข้อมูลเสร็จสิ้น";
		 }else{
		 echo "	ไม่สามารถแก้ไข้ข้อมูลได้";
		 }
		
	
		

?>