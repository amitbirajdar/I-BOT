<head><link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"></head>
<style>
  body::-webkit-scrollbar {
  width: 0em;
}
 
body::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}
 
body::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}
hr { 
            border: none; 
            height: 7px; 
            background: rgba(52, 59, 64, 0.9); 
            margin-top:0px;
            margin-bottom: 0px;
        }
</style>
<?php
error_reporting(0);
require 'connection.php';
session_start();
if($con){
    mysqli_select_db($con,'ibot');
}
else{
    die("Error! Could not connect");
}
$name= $_SESSION['id'];
$query="SELECT * from query where user_id='$name' and status='0'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)) {
  $resultset[] = $row;
}
$results=$resultset;
if(mysqli_num_rows($result)){
?>
<h1 style="color:rgb(78, 78, 50);margin-bottom:0px;font-family:sans-serif;padding:20px 0px 20px 0px;background-color: yellow"><center>REPORTS IN PROCESSING</center></h1>
 <?php
 	$prev=0;
    foreach($results as $data) {
      $query_id=$data['t_id'];
      $part=$data['name'];
      $img=$data['imagename'];
      $ext=explode(".", $img);
      $ext=$ext[1];
      if($query_id==$prev){ ?>
      	  <div style="padding-left:20px;"><br><b>Part Damaged: </b><?php
	      echo $part; ?> <br><b>Image Uploaded: </b><a href="uploads/<?php
        echo $_SESSION['id']."-".$query_id."/".str_replace(' ', '', $part).".".$ext; ?>" download style="text-decoration: none;"><?php echo $img;; ?></a></div><?php
      } else{?>
	      <br><hr><div style="padding-left:20px;"><br><b> Report ID: </b><?php 
	      echo $query_id; ?><br><br><b> Car: </b><?php 
        echo $data['car']; ?><br><br><b>Part Damaged: </b><?php
	      echo $part; ?> <br><b>Image Uploaded: </b>
	    <a href="uploads/<?php echo $_SESSION['id']."-".$query_id."/".str_replace(' ', '', $part).".".$ext; ?>" download style="text-decoration: none;"><?php echo $img; ?></a></div><?php
    }$prev=$query_id;} ?><br><hr>
<?php }else{  ?>
<h1 style="color:rgb(78, 78, 50);font-family:sans-serif;padding:20px 0px 20px 0px;background-color: yellow"><center>REPORTS IN PROCESSING</center></h1>
<h1 style="font-family: monospace;padding-top:100px;"><center>No reports in processing...</center></h1><?php
}