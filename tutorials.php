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

    <title>Annex Academy | Tutorials</title>

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
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="about.php"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>
                    <li class="active"><a href="tutorials.php"><i class="fa fa-book" aria-hidden="true"></i> Tutorials</a></li>
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

    <header class="business">

    </header>
    <center><h2 class="section-heading"><i class="fa fa-file-video-o" aria-hidden="true"></i> Turorials</h2></center>
    <!-- Page Content -->
    <div class="container">
        <center>
            <div>
                <button class="btn btn-primary filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="math">Mathematics</button>
                <button class="btn btn-default filter-button" data-filter="ap_math">AP Mathematics</button>
                <button class="btn btn-default filter-button" data-filter="phys">Physics</button>
                <button class="btn btn-default filter-button" data-filter="bio">Life Sciences</button>
                <button class="btn btn-default filter-button" data-filter="lang">Languages</button>
                <button class="btn btn-default filter-button" data-filter="hist">History</button>
                <button class="btn btn-default filter-button" data-filter="geo">Geography</button>
                <button class="btn btn-default filter-button" data-filter="prog">Programming</button>
                <button class="btn btn-default filter-button" data-filter="cat">CAT</button>
            </div>
        </center>
        <br/>

        
        <div class="row">

            <div class="col-xs-18 col-sm-6 col-md-3 filter math" >
              <div class="thumbnail">
                <img src="http://placehold.it/500x250/EEE">
                  <div class="caption">
                    <h4>Thumbnail label</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                    <a href="#" class="btn btn-info btn-xs" role="button"><i class="fa fa-thumbs-o-up"></i> Like</a> <a href="#" class="btn btn-default btn-xs" role="button"><i class="fa fa-eye"></i> Watch</a>
                </div>
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
                <p class="footer-company-name">Dent Removal Specialist &copy; 2017</p>
                <p class="footer-company-name"><a href="assets/docs/DRS DENT REMOVAL SPECIALIST SERVICE CONTRACT.docx">Terms & Conditions</a></p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Unit 14, N1 Park</span> Sandpiper Crescent, Okavango Business Park</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+27 72 981 0047</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:info@drsgroup.co.za">info@drsgroup.co.za</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>About DRS</span>
                DRS Dent Removal Specialist is a company that offers Mobile Paintless Dent Removal, Hail Damage, Buff and Polish, Head Light Restoration, Mag and Rim Repairs, Minor scratch removal with reasonable prices, good quality and exceptional service.
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
<script type="text/javascript">
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
</script>
</body>

</html>