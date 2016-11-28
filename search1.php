<?php header('Content-type: text/plain; charset=utf-8');
	require_once('localhost.php');

	if(isset($_GET['searchQuery']) )
	     {
		 $searchQuery=$_GET['searchQuery'] ;

		 $sql = "SELECT * FROM detaildoctor WHERE name='%".$searchquery."%' 
				 OR  surname  LIKE '%".$search_query."%' 
				 OR  numbercode LIKE '%".$searchquery."%' 
				 OR   hospital LIKE '%".$searchquery."%' " ;
		 $r = mysqli_query($conn,$sql); 
		 mysqli_set_charset($conn,"utf8");
		 $result = array();	 

		 while($row = mysqli_fetch_array($r)){
			array_push($result,array(
			 "name"=>$res['name'],
			 "surname"=>$res['surname'],
			 "numbercode"=>$res['numbercode'],
			 "hospital"=>$res['hospital']
			 )
		 );
		}
		 
		 echo json_encode(array("result"=>$result));
		 
		} 
	
	mysqli_close($conn);
?>

	

