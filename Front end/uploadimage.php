<?php
session_start();
error_reporting(0);
    require 'connection.php';
    if(isset($_POST['submit'])){
    	$name=$_POST['part'];
        $id=$_POST['id'];
        $tid=$_POST['tid'];
        echo $tid;
        $car=$_POST['car'];
    	$img=$_FILES['file'];
    	$imgname=$_FILES['file']['name'];
        $ext = pathinfo($imgname, PATHINFO_EXTENSION);
        $ext=".".strtolower($ext);
        $upload_name=$_POST['part'].$ext;
        $upload_name2 = str_replace(' ', '', $_POST['part']).$ext;
    	$imgtmpname=$_FILES['file']['tmp_name'];
        $dir="uploads/".str_replace(' ', '', $_SESSION['id'])."-".$tid;
        mkdir($dir);
    	$filedes=$dir."/".$upload_name;
    	$insert="insert into query values('NULL','$car','$name','$upload_name2','0','$id','NULL','$tid','0')";
    	if(mysqli_query($con,$insert)){
    		move_uploaded_file($imgtmpname, $filedes);
    	}else{
    		echo "<script>alert('Image can't upload!')</script>";
    	}
        echo '<meta http-equiv="refresh" content="0;url=submit_query.php?tid='.$tid.'&car='.$car.'" />';
    }?>