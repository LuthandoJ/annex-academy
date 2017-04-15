<?php
    include_once 'assets/include/config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Athi Sithembiso">

    <title>Annex Academy | Welcome</title>

    <!--Favicon-->
     <link rel="icon" type="image/png" href="#">
    <!--CSS Files -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/footer-distributed-with-address-and-phones.css">
    <style type="text/css">.btn{border-radius: 0;}.container input{height: 45px;width: 300px;font-size: 18px;margin-bottom: 20px;}</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-top: -100px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="http://placehold.it/150x50&text=Logo" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="margin-right: -88px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="about.php"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>
                    <li><a href="tutorials.php"><i class="fa fa-book" aria-hidden="true"></i> Tutorials</a></li>
                    <li><a href="recources.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Recources</a></li>
                    <?php 
                        if(isset($_SESSION['user_id'])) {
                    ?>
                        <li><a href="home.php"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
                    <?php 
                        }else{
                    ?>
                    <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                    <li><a href="register.php"><i class="fa fa-pencil" aria-hidden="true"></i> Register</a></li>
                    <?php } ?>
                    <li><a href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <header class="business-header">
        <div class="container"  style="padding-top: 10px;">
            <div class="row">
               <div class="col-md-6">
                      <h1 class="title">Welcome To <strong class="clr">Annex Academy</strong>. Learn today, lead tomorrow..</h1>
                                <h4 class="h7">Every landing page needs a small description after the big bold title, that's why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
                                <br />
                                <a href="#" class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Watch video
                      </a>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container" style="padding-top: 15px;">
          <section id="services">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 text-center">
                          <h2 class="section-heading">At Your Service</h2>
                          <hr style="border-top: 1px solid #81C784;">
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="service-box">
                              <i class="fa fa-4x fa-globe text-success"></i>
                              <h3>Anywhere</h3>
                              <h4>Study anywhere around the globe with no hassels.</h4>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="service-box">
                              <i class="fa fa-4x fa-clock-o"></i>
                              <h3>Anytime</h3>
                              <h4>You can use Annex Academy anytime 24/7 365!</h4>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="service-box">
                              <i class="fa fa-4x fa-mobile-phone"></i>
                              <h3>Mobile Friendly</h3>
                              <h4>Use your mobile device to access Annex, to keep things fresh.</h4>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="service-box">
                              <i class="fa fa-4x fa-heart" style="color: #f44336;"></i>
                              <h3>Made with Love</h3>
                              <h4>You have to make your websites with love these days!</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <br>
          <section id="about">
            <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us</h2>
                  </div>
              </div>
            </div>
            <div class="container">
              <div class="col-lg-18">
                <div class="thumbnail">
                    <div class="caption">
                      <h3 class="clr">Annex Academy <i class="fa fa-book"></i> </h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                      <a href="#" class="btn btn-info btn-xs" role="button"><i class="fa fa-facebook"></i> Like Us</a> <a href="#" class="btn btn-default btn-xs" role="button"><i class="fa fa-twitter"></i> Follow Us</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <br>
          <center><h2 class="section-heading"><i class="fa fa-file-video-o" aria-hidden="true"></i> Turorials</h2></center>
          <br>
          <div class="container search">
            <center>
              <form style="padding-top: 70px">
                <div class="form-input">
                  <input type="text" class="form-control" name="search" id="search"  placeholder="Search" required>
                </div>
              </form>
            </center>
          </div>
          <br>
          <div class="container">
            <div class="row">
              <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="http://placehold.it/500x250/EEE">
                    <div class="caption">
                      <h4>Thumbnail label</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                      <a href="#" class="btn btn-info btn-xs" role="button"><i class="fa fa-thumbs-o-up"></i> Like</a> <a href="#" class="btn btn-default btn-xs" role="button"><i class="fa fa-eye"></i> Watch</a>
                  </div>
                </div>
              </div>

              <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="http://placehold.it/500x250/EEE">
                    <div class="caption">
                      <h4>Thumbnail label</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                      <a href="#" class="btn btn-info btn-xs" role="button"><i class="fa fa-thumbs-o-up"></i> Like</a> <a href="#" class="btn btn-default btn-xs" role="button"><i class="fa fa-eye"></i> Watch</a>
                  </div>
                </div>
              </div>

              <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="http://placehold.it/500x250/EEE">
                    <div class="caption">
                      <h4>Thumbnail label</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                      <a href="#" class="btn btn-info btn-xs" role="button"><i class="fa fa-thumbs-o-up"></i> Like</a> <a href="#" class="btn btn-default btn-xs" role="button"><i class="fa fa-eye"></i> Watch</a>
                  </div>
                </div>
              </div>
              <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img src="http://placehold.it/500x250/EEE">
                    <div class="caption">
                      <h4>Thumbnail label</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                      <a href="#" class="btn btn-info btn-xs" role="button"><i class="fa fa-thumbs-o-up"></i> Like</a> <a href="#" class="btn btn-default btn-xs" role="button"><i class="fa fa-eye"></i> Watch</a>
                  </div>
                </div>
              </div>
          </div><!--/row-->
            <center>
              <a href="tutorials.php" class="btn btn-info btn-raised"><i class="fa fa-play"></i> More Tutorials</a>
            </center>
          </div><!--/container -->
          
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="primary">
                        <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2 text-center">
                        <i class="fa fa-phone fa-3x sr-contact"></i>&nbsp;
                        <i class="fa fa-mobile-phone fa-3x sr-contact"></i>
                        <p>(021) 456-6789</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                        <p><a href="contact.php">info@annexacademy.co.za</a></p>
                    </div>
                </div>
        </div>
      </div>

       <a id="back-to-top" href="#" class="btn btn-success btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
       <span class="fa fa-chevron-up"></span></a>

    <footer class="footer-distributed" style="background-color: #363435;">
        <div class="footer-left">
            <img style="max-width:250px; margin-top: -30px;"
                         src="assets/images/header.jpg">
                <p class="footer-links">
                    <a href="index.html">Home</a>
                    ·
                    <a href="about.html">About Us</a>
                    ·
                    <a href="services.html">Services</a>
                    ·
                    <a href="gallery.html">Gallery</a>
                    ·
                    <a href="contact.html">Contact</a>
                </p>
                <p class="footer-company-name">Annex Academy &copy; 2017</p>
                <p class="footer-company-name"><a href="#">Terms & Conditions</a></p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>About Annex Academy</span> About Annex AcademyAbout Annex Academy</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+27 72 981 0047</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:info@drsgroup.co.za">About Annex Academy</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About Annex Academy</span>
                About Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex AcademyAbout Annex Academy
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/DRS-Dent-Removal-Specialist-215227088652273/"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Back To Top Script -->
    <script type="text/javascript">
    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});
</script>

</body>

</html>
