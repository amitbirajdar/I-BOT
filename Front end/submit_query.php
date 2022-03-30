<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>I-Bot</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<style>
body {
 background-image: url("img/query_bck.jpg");
 background-size: cover;
}
</style>
</head>

<body>

  <header id="header" style="background-color: rgba(52, 59, 64, 0.9);">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
<div class="container" style="margin:150px 200px 0px 200px;background-color:white;padding:0px 20px 10px 20px;border-radius: 2%;box-shadow: 0px 1px 25px rgba(0,0,0,0.8);">
<?php
$tid=$_GET['tid'];
$car=$_GET['car'];
require 'connection.php';
if($con){
    mysqli_select_db($con,'ibot');
}
else{
    die("Error! Could not connect");
}
$name= $_SESSION['id'];
$fname=str_replace(' ', '', $_SESSION['id'])."-".$tid;
$query="SELECT * from query where user_id='$name' and status='0' and t_id='$tid'";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)) {
  $resultset[] = $row;
}
$results=$resultset;
?>
<table border="0" class="table table-striped">
  <th colspan="2"><h1 style="color:black;">SUMMARY OF YOUR REPORT</h1></th>
  <h2><tr><td>
    <?php
    echo "Report ID: ".$tid."<hr>";
    foreach($results as $data) {
      /*$query_id=$data['id'];*/
      $part=$data['name'];
      $img=$data['imagename'];
      ?><!-- <b> Query ID: </b><?php 
      echo $query_id; ?> <br> --><b>Part Damaged: </b><?php
      echo $part; ?> <br><b>Image Uploaded: </b><?php
      echo $img; ?><hr> <?php
    } ?></td></tr>
  <tr><td colspan="2" id="1"></td></tr>
  <tr><td colspan="2"><button onclick="add()" style="margin: 0px 35px 0px 20px;padding:10px 190px 10px 190px;" class="btn btn-success">Add more parts</button><button class="btn btn-primary" onclick="calc()" style="margin: 0px 10px 0px 10px;padding:10px 215px 10px 215px;">Proceed</button></td></tr></h2><br><tr><td colspan="2" id="2"></td></tr></table>
</div>
  <main id="main">

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="js/main.js"></script>
<script>
  function add() {
    $.ajax({
    type: "POST",
    url: "addimage.php",
    data: "tid="+<?php echo $tid; ?>+"&car="+"<?php echo $car; ?>",
    success: function(data){
      $("#1").html(data);
    }
    });
  }
  function calc() {
  $.ajax({
  type: "POST",
  url: "../Mask_RCNN/samples/Car/pcaller.py?<?php echo $fname; ?>",
  

  });
  document.write('<meta http-equiv="refresh" content="1;url=QuesBuilder.php" />')
}
/*function calc() {
  $.ajax({
  type: "POST",
  url: "sender.py?<?php echo $fname; ?>",
  success: function(data){
    $('#2').html(data);
  }
  });
}*/
</script>
</body>
</html>
