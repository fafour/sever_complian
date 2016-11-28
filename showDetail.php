<?php header('Content-type: text/plain; charset=utf-8');
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "projecttest";
	$conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
	mysqli_set_charset($conn,"utf8");
	
	
	 $idpeople = isset($_POST['idpeople']) ? $_POST['idpeople'] : '';
	 $tittleName = isset($_POST['tittleName']) ? $_POST['tittleName'] : '';
	 $name = isset($_POST['name']) ? $_POST['name'] : '';
	 $surName = isset($_POST['surName']) ? $_POST['surName'] : '';
	 $idCode = isset($_POST['idCode']) ? $_POST['idCode'] : '';


	 $sql = "SELECT * FROM detailcomplain WHERE IdPeople='".$idpeople."' AND  TittleName='".$tittleName."' AND  Name='".$name."' AND   SurName='".$surName."' AND   IdCode='".$idCode."'" ;
	 $r = mysqli_query($conn,$sql);
	 $res = mysqli_fetch_array($r); 
	 $result = array();	 
	 array_push($result,array(
		 "main"=>$res['Main'],
		 "status"=>$res['Status'],
		 "responsiblePerson"=>$res['responsiblePerson'],
		 "atDay"=>$res['AtDay'],
		 "day"=>$res['Day'],
		 "detai"=>$res['Detai'],
		 "hospitalName"=>$res['HospitalName'],
		 "nameDoctor"=>$res['NameDoctor']
		 )
	 );
	 
	 echo json_encode($result);
	 
	 
	 
	
	
	mysqli_close($conn);
?>