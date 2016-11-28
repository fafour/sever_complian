<?php   header('Content-type: text/plain; charset=utf-8');
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "projecttest";
    $conn = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());
  	
	 if($_SERVER['REQUEST_METHOD'] == 'POST')
	 {
	 $DefaultId = 0;
	 
	 $ImageData = $_POST['image_data'];
	 
	 $ImageName = $_POST['image_tag'];

	 $GetOldIdSQL ="SELECT id FROM ImageUpload ORDER BY id ASC";
	 
	 $Query = mysqli_query($conn,$GetOldIdSQL);
	 
	 while($row = mysqli_fetch_array($Query)){
	 
	 	$DefaultId = $row['id'];
	 }
	 
	 $DefaultIds = $DefaultId.$ImageName;

	 $ImagePath = "pic/$DefaultIds.jpg";
	 
	 $ServerURL = "http://192.168.1.40/data/$ImagePath";
	 
	 $InsertSQL = "insert into ImageUpload (image_data,image_tag) values ('$ServerURL','$ImageName')";
	 
	 if(mysqli_query($conn, $InsertSQL)){

	 file_put_contents($ImagePath,base64_decode($ImageData));

	 echo "อัพโหลดภาพเสร็จสิ้น";
	 }
	 
	 mysqli_close($conn);
	 }else{
	 echo "Please Try Again";
	 }
?>