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
$query="SELECT * from query where user_id='$name' and status='1'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)) {
  $resultset[] = $row;
}
$results=$resultset;
if(mysqli_num_rows($result)){
?>
<h1 style="color:white;font-family:sans-serif;margin-bottom:0px;padding:20px 0px 20px 0px;background-color: rgb(0, 102, 255)"><center>REPORTS COMPLETED</center></h1>
 <?php
  $prev=-1;
  $ptid=0;
  foreach($results as $data){
    $tid=$data['t_id'];
    if($ptid==$tid){
    }else{
      if($prev==-1){}else{?><br><b><div style="padding-left:20px;">Final Amount: </b><?php echo $prev;}
      $query_id=$tid;
      ?></div><br><hr><div style="padding-left:20px;"><br><b> Report ID: </b><?php echo $query_id; ?><br><br><b> Car: </b><?php echo $data['car'];?></div><?php
      $prev=0;
    }
    $part=$data['name'];
    $img=$data['imagename'];
    $ext=explode(".", $img);
    $ext=$ext[1];
    $amt=$data['claim'];
    $prev=$amt+$prev;
        ?><div style="padding-left:20px;"><br><b>Part Damaged: </b><?php
        echo $part; ?> <br><b> Claim approximation: </b><?php 
        echo $amt; ?><br><b>Image Uploaded: </b><a href="uploads/<?php
        echo $_SESSION['id']."-".$tid."/". $part."_d.".$ext; ?>" download style="text-decoration: none;"><?php echo $img; ?></a></div><?php
    $ptid=$tid;
    }?><div style="padding-left:20px;"><br><b>Final Amount: </b><?php echo $prev; ?></div><br><hr>
<?php }else{  ?>
<h1 style="color:white;font-family:sans-serif;padding:20px 0px 20px 0px;background-color: rgb(0, 102, 255)"><center>REPORTS COMPLETED</center></h1>
<h1 style="font-family: monospace;padding-top:100px;"><center>No reports created yet...</center></h1><?php
}