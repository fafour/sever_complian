<?php header('Content-type: text/plain; charset=utf-8');
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "projecttest";
    $con = mysqli_connect($host,$username,$password,$database) or die (mysqli_error());


    $image_tag = isset($_POST['image_tag']) ? $_POST['image_tag'] : '';

    $sql = "SELECT image_data from imageupload WHERE image_tag='".$image_tag."'  ";

    $r = mysqli_query($con,$sql);
	 
	$res = mysqli_fetch_array($r); 

    $result = array();  

    array_push($result,array(
		 "image_data"=>$res['image_data']
		 )
	 );
	 
	 echo json_encode($result);

    

    mysqli_close($con);


?>