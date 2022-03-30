<!DOCTYPE html>
<html lang="en">
<?php session_start();
error_reporting(0);?>
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
 color:black;
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
          <li><a href="index.php">Home</a></li>
          <li class="menu-active"><a href="#1" onclick="ongoing()">Ongoing</a></li>
          <li><a href="#1" onclick="history()">history</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
<span class="float-right"><a href="new_query.php"><button style="margin:150px 70px 0px 0px;padding:20px 40px 20px 40px;" class="btn btn-success">+ Make a new report</button></a></span>
<div id="1">
<iframe src="ongoing_query.php" style="background-color:white;margin: 150px 20px 0px 20px;border:none;" width="75%" height="590px"></iframe>
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
  function ongoing() {
    $.ajax({
    type: "POST",
    url: "data_selector.php?sel=1",
    success: function(data){
      $("#1").html(data);
    }
    });
  }
  function history() {
    $.ajax({
    type: "POST",
    url: "data_selector.php?sel=2",
    success: function(data){
      $("#1").html(data);
    }
    });
  }
</script>
</body>
</html>
