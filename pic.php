<?php  header('Content-type: text/plain; charset=utf-8');
    require_once('localhost.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        $image = $_POST['image'];
        
        $sql = "INSERT INTO images (image) VALUES (?)";

        $stmt = mysqli_prepare($conn,$sql);
        
        mysqli_stmt_bind_param($stmt,"s",$image);
        mysqli_stmt_execute($stmt);
        
        $check = mysqli_stmt_affected_rows($stmt);
        
        if($check == 1){
            echo "Image Uploaded Successfully";
        }else{
            echo "Error Uploading Image";
        }
        mysqli_close($conn);
    }else{
        echo "Error";
    }
   
?>