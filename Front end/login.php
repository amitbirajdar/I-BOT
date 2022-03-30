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
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="row" style="width:850px;height:420px;background-color: white;border-radius: 2%;box-shadow: 7px 17px 17px rgba(0,0,0,0.8);">
        <div class="col-xs-6">
          <img src="img/aboutus.gif" style="border-radius: 35%" width="480px" height="400px">
        </div>
        <div class="col-xs-6">
          <form method="post" action="login_submit.php">
            <br><h1 style="color:black;">Login</h1>
            <br>
            <input type="email" class="form-control" name="email" placeholder="Email  (abc@xyz.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
            <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required><br>
            <input type="submit" class="form-control btn btn-success"><br><br>
            Don't have an account? <a href="signup.php"> Sign Up</a> now!<br>
            Forgot <a href="">password?</a>
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

</body>
</html>
