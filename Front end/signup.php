<!DOCTYPE html>
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

</head>

<body>

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
      </nav>
    </div>
  </header>


<?php
  $dbcon=mysqli_connect("localhost","root","");
  if($dbcon){
      mysqli_select_db($dbcon,'ibot');
  }
  else{
      die("Error! Could not connect");
  }
  $query="SELECT * from country";
  $result = mysqli_query($dbcon,$query);
  while($row=mysqli_fetch_assoc($result)) {
    $resultset[] = $row;
  }
  $results=$resultset;
?>
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="row" style="background-color: white;width:1250px;border-radius: 1%;box-shadow: 7px 17px 17px rgba(0,0,0,0.8);">
        <div class="col-xs-6">
          <br><img src="img/aboutus.gif" style="border-radius: 35%" width="640px" height="500px">
        </div>
        <div class="col-xs-6" style="width:600px;">
        <form method="post" class="form" action="user_registration_script.php">
          <h1 style="color: black;">Register</h1>
          <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" required="true">
          </div>
          <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email (abc@xyz.com)" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          </div> 
          <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password (min. 6 characters)" required="true" pattern=".{6,}">
          </div>
          <div class="form-group"> 
              <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address" required="true">
          </div>
           <div class="form-group">
                <select name="country" id="country-list" class="form-control" onChange="getState(this.value);">
                <option value disabled selected>Select Country</option>
                <?php
                foreach($results as $country) {
                ?>
                <option value="<?php echo $country["id"];?>"><?php echo $country["name"]; ?></option>
                <?php
                }
                ?></select>
          </div>
          <div class="form-group">
            <select name="state" id="state-list" class="form-control" onChange="getCity(this.value);" required="true">
                  <option value="">Select State</option>
              </select>
          </div>
          <div class="form-group">
            <select name="city" id="city-list" class="form-control" required="true">
                  <option value="">Select City</option>
              </select>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-primary" style="width:200px;align-self: center;" value="Sign Up" required="true">
          </div>
        </form>
      </div>
      </div>
    </div>
  </section>

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
function getState(val) {
  $.ajax({
  type: "POST",
  url: "getState.php",
  data:'country_id='+val,
  success: function(data){
    $("#state-list").html(data);
    getCity();
  }
  });
}
function getCity(val) {
  $.ajax({
  type: "POST",
  url: "getCity.php",
  data:'state_id='+val,
  success: function(data){
    $("#city-list").html(data);
  }
  });
}
</script>
</body>
</html>
