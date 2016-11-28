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
	$idpeople = isset($_POST['idpeople']) ? $_POST['idpeople'] : '';
	$tittleName = isset($_POST['tittleName']) ? $_POST['tittleName'] : '';
	$name = isset($_POST['name']) ? $_POST['name'] : '';
	$surName = isset($_POST['surName']) ? $_POST['surName'] : '';
	$relationship = isset($_POST['relationship']) ? $_POST['relationship'] : '';
	$phoneNumber = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$adress = isset($_POST['adress']) ? $_POST['adress'] : '';
	$phoneHome = isset($_POST['phoneHome']) ? $_POST['phoneHome'] : '';
	$nameDoctor = isset($_POST['nameDoctor']) ? $_POST['nameDoctor'] : '';
	$hospitalName = isset($_POST['hospitalName']) ? $_POST['hospitalName'] : '';
	$detai = isset($_POST['detai']) ? $_POST['detai'] : '';
	$day = isset($_POST['day']) ? $_POST['day'] : '';
	$atDay = isset($_POST['atDay']) ? $_POST['atDay'] : '';
	$idCode = isset($_POST['idCode']) ? $_POST['idCode'] : '';
	$responsiblePerson = isset($_POST['responsiblePerson']) ? $_POST['responsiblePerson'] : '';
	$main = isset($_POST['main']) ? $_POST['main'] : '';
	$status = isset($_POST['status']) ? $_POST['status'] : '';
	$recipientComplaints = isset($_POST['recipientComplaints']) ? $_POST['recipientComplaints'] : '';

	mysqli_set_charset($conn,"utf8");
	$query = mysqli_query($conn, "insert into detailcomplain (IdPeople, TittleName, Name, SurName ,Relationship ,PhoneNumber ,Email , Adress , PhoneHome ,NameDoctor ,HospitalName ,Detai ,Day ,AtDay ,IdCode,responsiblePerson,Main,Status,RecipientComplaints) values ('$idpeople' ,'$tittleName' ,'$name' ,'$surName' ,'$relationship' ,'$phoneNumber','$email','$adress','$phoneHome','$nameDoctor','$hospitalName','$detai','$day','$atDay','$idCode','$responsiblePerson','$main','$status','$recipientComplaints') ");


	
	
	mysqli_close($conn);
?>