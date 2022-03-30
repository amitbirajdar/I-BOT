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
      <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="index.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="container" style="background:white;margin:150px 200px 0px 200px;padding:50px 50px 0px 50px;border-radius: 2%;box-shadow: 0px 1px 25px rgba(0,0,0,0.8);">
<?php
require 'connection.php';
$tid=1;
$name= $_SESSION['id'];
$check="SELECT * from query where user_id='$name'";
$ans=mysqli_query($con,$check);
if(mysqli_num_rows($ans)){
  while($row=mysqli_fetch_assoc($ans)) {
  $transset[] = $row;
}
$ptrans=$transset;
foreach($ptrans as $data){
  $tid=$data['t_id'];
}
$tid=$tid+1;
}
if($con){
    mysqli_select_db($con,'ibot');
}
else{
    die("Error! Could not connect");
}
$query="SELECT * from parts";
$result = mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result)) {
  $resultset[] = $row;
}
$results=$resultset;
?><center>
<h1>Upload images of your damaged car...<br></h1>
  <div class="jumbotron" style="padding:20px 20px 20px 20px;">
    <div class="row">
      <form class="form" action="uploadimage.php" method="post" enctype="multipart/form-data">
        <div class="col-xs-6 float-left" style="margin: 0px 50px 0px 50px;">
          <div class="form-group">
            <h3 style="color:black;">Part that has been damaged:</h3>
            <select name="part" id="country-list" class="form-control" style="width:80%;">
            <option value disabled selected>Select Part</option>
            <?php
            foreach($results as $part) {
            ?>
            <option value="<?php echo $part["name"];?>"><?php echo $part["name"]; ?></option>
            <?php
            }
            ?></select><br>
          <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
          <input type="hidden" name="tid" value="<?php echo $tid; ?>">
          </div>
       </div>
       <div class="col-xs-6 float-right" style="margin: 0px 50px 0px 50px;">
          <h3 style="color:black;">Select image to upload:</h3>
          <input type="file" class="form-control" style="width:90%;" name="file">
      </div>
    </div>
    <button onclick="submit" class="btn btn-primary" style="margin: 20px 20px 0px 20px;padding:10px 40px 10px 40px;" >Upload</button>
    </form>
<div id="1">
</div>
</div>
<button onclick="add()" style="margin: 0px 150px 20px 150px;padding:10px 100px 10px 100px;" class="btn btn-success">Add more parts</button>
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
    data: "tid="+<?php echo $tid; ?>,
    success: function(data){
      $("#1").html(data);
    }
    });
  }
</script>
</body>
</html>
