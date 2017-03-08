<?php 
    include_once "assets/include/config.php";
    session_start();

    if(!isset($_SESSION['user_id'])) {
        header('location:login.php');
        exit();
    }   
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

    <title>Annex Academy | Home</title>

    <!--Favicon-->
     <link rel="icon" type="image/png" href="#">
    <!--CSS Files -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/footer-distributed-with-address-and-phones.css">

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
                    <li class="active"><a href="index.php"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="tutorials.php"><i class="fa fa-book" aria-hidden="true"></i> Tutorials</a></li>
                    <li><a href="recources.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Recources</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a></li>
                        <li><a href="settings.php"><i class="fa fa-fw fa-gear"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <!-- Page Heading -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard <small>Statistics Overview</small></h1>
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">26</div>
                                <div>New Comments!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" >
                <div class="panel panel-primary" style="border-color:#4cbb51;">
                    <div class="panel-heading" style="background-color: #4cbb51;border-color:#4cbb51;  ">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">26</div>
                                <div>New Tasks!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">26</div>
                                <div>Orders</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
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

</body>

</html>