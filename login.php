<!DOCTYPE html>
<html class="full" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Athi Sithembiso">

    <title>Annex Academy | Login</title>

    <!--Favicon-->
     <link rel="icon" type="image/png" href="#">
    <!--CSS Files -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body style="margin-top: 50px;margin-bottom: 50px;background: none;">
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-static-top" style="margin-top: -100px; background: none;border:none;">
        <nav class="navbar-inner">
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
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="margin-right: -100px;">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
                        <li><a href="tutorials.php"><i class="fa fa-book" aria-hidden="true"></i> Tutorials</a></li>
                        <li><a href="recources.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Recources</a></li>
                        <li class="active"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                        <li><a href="register.php"><i class="fa fa-pencil" aria-hidden="true"></i> Register</a></li>
                        <li><a href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>

    <!-- Page Content -->
    <div class="container">
      <div class="row main">
        <div class="main-login main-center">
          <form name="login"  method="post" action="">
            <div class="form-group">
            </div>
            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required>
                </div>
              </div>
            </div>

            <div class="form-group ">
              <input type="submit" class="btn btn-success btn-lg btn-block login-button" name = "submit" value="Login">
            </div>
            <div>
              <p> Dont have an Account?? Register <a href="register.php">Here</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>