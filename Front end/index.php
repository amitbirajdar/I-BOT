<?php
    session_start();
?>
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
</style>
</head>

<body>

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo.png" alt="" title="" /></img></a>
        <!--<h1><a href="#hero">i can add logo text here.</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <?php
           if(isset($_SESSION['email'])){
          ?>
            <!-- <li class="menu-active"><a href="#hero">Home</a></li> -->
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio">Gallery</a></li>
            <li><a href="#team">Developers</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php
           }else{
          ?>
            <li class="menu-active"><a href="#hero">Home</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#portfolio">Gallery</a></li>
            <li><a href="#team">Developers</a></li>
            <li><a href="#contact">Contact Us</a></li>
          <?php
           }
          ?>
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" style="padding-left:0px;margin-left:0px;color:white;text-align: left;">
    <div class="hero-container">
      <?php
       if(isset($_SESSION['email'])){
      ?>
        <h1>Hello <u><span style="color: cyan;"><?php echo $_SESSION['name']; ?></u></span>!<br><br></h1>
        <h3>You can find steps in the about me me section if you want to know the<br>procedure and whenever you are ready click on the button below...</h3>
        <a href="#facts" class="btn-get-started" style="font-size: 20px;box-shadow: 0px 1px 25px rgba(0,0,0,0.8);">Get estimate now!</a>
      <?php
       }else{
      ?>
        <h1>Welcome to the Insurance Bot!</h1><br><br>
        <h3>Welcome to the Insurance Bot! Get a repair cost estimate for your<br>damaged car in no time and save yourself the hassle of going to<br>your insurace agent and waiting for him to tell you the claim<br>amount by getting a very close approximate of the amount by us!<br><br></h3>
        <a href="login.php" class="btn-get-started" style="font-size: 30px;box-shadow: 0px 1px 25px rgba(0,0,0,0.8);">Login to get started!</a>
      <?php
       }
      ?>
    </div>
  </section>

  <main id="main">

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <br><br><br>
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
          <p class="section-description">Here are some intresting facts about me.</p>
        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Happy Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Accurate predicitions</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">365</span>
            <p>Days of Service/year</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">24</span>
            <p>Hours of support</p>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Are you ready?</h3>
            <p class="cta-text">Click on the button to calculate your insurance amount.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="new_query.php">Calculate</a>
          </div>
        </div>

      </div>
    </section>


    <!--==========================
      About Us Section
    ============================-->
    
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About Me...</h2>
            <p>
              I am a super intellegent bot designed by my masters in order to help the laymen who seek money from their insurance company. My true purpose is to tell them the exact amout of claim money they will be getting from the insurance company. Just follow the following instructions...
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-wpforms"></i></div>
              <h4 class="title"><a href="">Fill up the form</a></h4>
              <p class="description">Tell me about the level of damage done to your car by answering a few simple questions laid down by me in my questionare.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Upload pictures</a></h4>
              <p class="description">Upload the pictures of accidental parts of your car to the cloud so that I can have a nice look at them.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Wait for result</a></h4>
              <p class="description">Once i get all the data needed by me to analyze the damage done to your car on the basis of the statistical data which i already have, wait for my result.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section>

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3><br>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <br><br>
            <!-- <ul id="portfolio-flters">
              <li data-filter=".filter-scratch, .filter-dent" class="filter-active">All</li>
              <li data-filter=".filter-scratch">Scratch</li>
              <li data-filter=".filter-dent">Dent</li>
            </ul> -->
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-scratch">
            <a href="">
              <img src="img/portfolio/scratch1.jpg" alt="">
              <div class="details">
                <h4>Brush-offs</h4>
                <span>by another car, a tree</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-dent">
            <a href="">
              <img src="img/portfolio/dent4.jpg" height="200px" width="300px" alt="">
              <div class="details">
                <h4>Dent</h4>
                <span>can be becayse of anything....</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-scratch">
            <a href="">
              <img src="img/portfolio/scratch2.jpg" width="300px" height="200px" alt="">
              <div class="details">
                <h4>Sharp Objects</h4>
                <span>key, car door, etc.</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-dent">
            <a href="">
              <img src="img/portfolio/dent1.jpg" height="200px" width="300px" alt="">
              <div class="details">
                <h4>Dent</h4>
                <span>can be becayse of anything....</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-dent">
            <a href="">
              <img src="img/portfolio/dent5.jpg" height="200px" width="300px" alt="">
              <div class="details">
                <h4>Dent</h4>
                <span>can be becayse of anything....</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-dent">
            <a href="">
              <img src="img/portfolio/dent3.jpg" height="250px" width="300px" alt="">
              <div class="details">
                <h4>Dent</h4>
                <span>can be becayse of anything....</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-scratch">
            <a href="">
              <img src="img/portfolio/scratch3.jpg" alt="">
              <div class="details">
                <h4>Something edgy</h4>
                <span>reversed into something edgy</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-dent">
            <a href="">
              <img src="img/portfolio/dent6.jpg" height="450px" width="300px" alt="">
              <div class="details">
                <h4>Dent</h4>
                <span>can be becayse of anything....</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Developers</h3>
          <p class="section-description">These are the people who created and trained me.</p>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <h4>Harsh Agarwal</h4>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <h4>Amit Birajdar</h4>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <h4>Manan Bolia</h4>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <h4>Vedang Gupte</h4>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact Us</h3>
          <p class="section-description">Please write your query to my masters after filling all the details. Thank you!</p>
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>NMIMS MPSTME,<br>Ville Parle(W),<br> Mumbai 400069</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>support@ibot.com</p><br>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+91 120 622 0207</p>
              </div>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form-group">
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>I-Bot</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
      <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
