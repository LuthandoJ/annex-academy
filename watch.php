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

    <title>Annex Academy | Watch</title>

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


    <!-- Page Content -->
    

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