<?php header('Content-type: text/plain; charset=utf-8');
   require_once('localhost.php');
    $image_tag = isset($_POST['image_tag']) ? $_POST['image_tag'] : '';

    $sql = "SELECT image_data from imageupload WHERE image_tag='".$image_tag."'  ";

    $r = mysqli_query($conn,$sql);
	 
	$res = mysqli_fetch_array($r); 

    $result = array();  

    array_push($result,array(
		 "image_data"=>$res['image_data']
		 )
	 );
	 
	 echo json_encode($result);

    

    mysqli_close($conn);


?>