<!DOCTYPE html>
<?php session_start();
require 'connection.php';
$uid=$_SESSION['id'];
$selector="SELECT t_id 
FROM query
WHERE user_id='$uid'";
$result=mysqli_query($con,$selector);
foreach ($result as $row) {
  $tid=$row['t_id'];
}
$sel2="SELECT car
FROM query
WHERE t_id='$tid'";
$result2=mysqli_query($con,$sel2);
foreach ($result2 as $row2) {
  $car=$row2['car'];
}
?>
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
input[type="checkbox"]{
  width: 20px;
  height: 20px;
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
<div class="container" style="margin:150px 200px 0px 200px;background-color:white;padding:20px 20px 20px 20px;border-radius: 2%;box-shadow: 0px 1px 25px rgba(0,0,0,0.8);">
  <form class="form-control" method="post" action="AnsUpdater.php">
    <h1 style="text-align: center;margin-left:100px;margin-right:100px;padding: 20px 0px 20px 0px">Please answer the following question to help us build a better report!</h1>
    <input type="hidden" value="<?php echo $car; ?>" name="car">
    <input type="hidden" value="<?php echo $tid; ?>" name="tid">
    <div class="jumbotron" style="padding:15px 20px 15px 20px" id="jfront">
    <label for="front" style="font-size: 30px;"><input type="checkbox" id="front" onclick="kfront()" />  Is the front damaged?</label>
    </div>
    <div class="jumbotron" style="padding:15px 20px 15px 20px" id="jside">
    <label for="side" style="font-size: 30px;"><input type="checkbox" id="side" onclick="kside()" />  Is the side damaged?</label>
    </div>
    <div class="jumbotron" style="padding:15px 20px 15px 20px" id="jrear">
    <label for="rear" style="font-size: 30px;"><input type="checkbox" id="rear" onclick="krear()" />  Is the rear damaged?</label>
    </div>
    <input type="submit" class="btn btn-primary form-control" value="Submit">
  </form>
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
    function krsw() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=rsw",
    success: function(data){
      $("#jrsw").html(data);
    }
    });
  }
  function kfsw() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=fsw",
    success: function(data){
      $("#jfsw").html(data);
    }
    });
  }
function kspeakers() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=speakers",
    success: function(data){
      $("#jspeakers").html(data);
    }
    });
  }
  function kalloy() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=alloy",
    success: function(data){
      $("#jalloy").html(data);
    }
    });
  }  
  function kwindow() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=window",
    success: function(data){
      $("#jwindow").html(data);
    }
    });
  }  
  function khl() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=hl",
    success: function(data){
      $("#jhl").html(data);
    }
    });
  }
  function ktl() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=tl",
    success: function(data){
      $("#jtl").html(data);
    }
    });
  }
  function korvm() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=orvm",
    success: function(data){
      $("#jorvm").html(data);
    }
    });
  }
  function kfront() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=front",
    success: function(data){
      $("#jfront").html(data);
    }
    });
  }
  function kside() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=side",
    success: function(data){
      $("#jside").html(data);
    }
    });
  }
  function krear() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=rear",
    success: function(data){
      $("#jrear").html(data);
    }
    });
  }
  function kfl() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=fl",
    success: function(data){
      $("#jfl").html(data);
    }
    });
  }
  function kfluid() {
    $.ajax({
    type: "GET",
    url: "quantifier.php",
    data: "id=fluid",
    success: function(data){
      $("#jfluid").html(data);
    }
    });
  }
</script>
 </body>
</html>