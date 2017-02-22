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
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="margin-right: -80px;">
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
                    <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> Tutorials</a></li>
                    <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i> Recources</a></li>
                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                    <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i> Register</a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <header class="business-header">
        <div class="container"  style="padding-top: 70px;">
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
    <div class="container">
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
                              <h4>You can use Bingo Edu anytime 24/7 365!</h4>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6 text-center">
                          <div class="service-box">
                              <i class="fa fa-4x fa-mobile-phone"></i>
                              <h3>Mobile Friendly</h3>
                              <h4>Use your mobile device to access Bingo, to keep things fresh.</h4>
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

          <hr class="primary">
          
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
