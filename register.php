<?php
    
    #error_reporting(0);

    include_once 'assets/include/config.php';
    session_start();

    if(isset($_SESSION['user_id'])) {
        header('location:home.php');
        exit();
    }
     $fname = ""; $lname = ""; $email = "";
     $reg_success = false;

    if (isset($_POST['reg'])) {

        $errors = array();

        $password = mysqli_real_escape_string($connect,$_POST['password']);
        $rpassword = mysqli_real_escape_string($connect,$_POST['rpassword']);
        $fname = validate_input(mysqli_real_escape_string($connect,$_POST['fname']));
        $lname = validate_input(mysqli_real_escape_string($connect,$_POST['lname']));
        $email = validate_input(mysqli_real_escape_string($connect,$_POST['email']));

        
        if ($password == $rpassword) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                if (preg_match("/^[a-zA-Z ]*$/",$fname)) {
                    if (preg_match("/^[a-zA-Z ]*$/",$lname)) {
                        
                        $sql = "SELECT * FROM users WHERE email = '$email'";
                        $query = $connect->query($sql);
                        if( !$query->num_rows > 0 ) {
                            $pass = md5($password);
                            $sql = "INSERT INTO users (email, first_name, last_name, password) VALUES ('$email', '$fname', '$lname', '$pass')";
                            $query = $connect->query($sql);
                            $reg_success = true;
                            $connect->close();
                        }else{
                            $errors[] = '  "User/email already exists"';
                        }
                    }else{
                        $errors[] = '  "Only letters and white space allowed <b>Last Name</b>"';
                    }
                }else{
                    $errors[] = '  "Only letters and white space allowed <b>First Name</b>"';
                }
            }else{
                $errors[] = '  "Invalid email address"';
            }
        }else{
            $errors[] = '  "Passwords don\'t match"';
        }

    }

    function validate_input($data) {
        $str = trim($data);
        $str = stripslashes($data);
        $str = htmlspecialchars($data);
        return $str;
    }
?>
<!DOCTYPE html>
<html class="full" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Athi Sithembiso">

    <title>Annex Academy | Register</title>

    <!--Favicon-->
     <link rel="icon" type="image/png" href="#">
    <!--CSS Files -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="margin-top: 50px;margin-bottom: 50px;background: none;">
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-static-top" style="margin-top: -150px; background: none;border:none;">
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
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="margin-right: -80px;">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li><a href="about.php"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>
                        <li><a href="tutorials.php"><i class="fa fa-book" aria-hidden="true"></i> Tutorials</a></li>
                        <li><a href="recources.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Recources</a></li>
                        <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
                        <li class="active"><a href="register.php"><i class="fa fa-pencil" aria-hidden="true"></i> Register</a></li>
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
        <div class="main-login main-center" style="margin-top: -10px;">
          <form class="form"  method="post" action="register.php">
                <div>
                    <?php if(!empty($errors)) {?>
                            <?php foreach ($errors as $key => $value) {
                            ?>
                            <div class='alert alert-warning alert-dismissable'><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class='glyphicon glyphicon-warning-sign'></i>
                            <b>Error:</b> <?php echo $value;
                            } ?>
                            </div>
                <?php } ?>
                <?php if ($reg_success) {
                        ?>  <div class='alert alert-success alert-dismissable'><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><i class='glyphicon glyphicon-check'></i> 
                                <b> Registration Successful:</b> Login <a href="login.php"><strong>here</strong></a>
                            </div><?php
                        } ?>
                </div>
             <div class="form-group">
              <label for="fname" class="cols-sm-2 control-label" style="color: #fff;">First Name</label>
              <div class="cols-sm-10">
                <div class="left-inner-addon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name" required value="<?php echo $fname;?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lname" class="cols-sm-2 control-label" style="color: #fff;">Last Name</label>
              <div class="cols-sm-10">
                <div class="left-inner-addon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name" required value="<?php echo $lname;?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label" style="color: #fff;">Email</label>
              <div class="cols-sm-10">
                <div class="left-inner-addon">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required value="<?php echo $email;?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label" style="color: #fff;">Password</label>
              <div class="cols-sm-10">
                <div class="left-inner-addon">
                  <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="rpassword" class="cols-sm-2 control-label" style="color: #fff;">Repeat Password</label>
              <div class="cols-sm-10">
                <div class="left-inner-addon">
                  <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                  <input type="password" class="form-control" name="rpassword" id="rpassword"  placeholder="Repeat your Password" required>
                </div>
              </div>
            </div>
            <div class="form-group ">
                <center>
                    <input type="submit" class="btn btn-success btnCool" name = "reg" value="REGISTER" style="border-radius: 0;">
                </center>
            </div>
            <div>
                <center>
                    <p style="color: #fff;">Alredy a member? Login <a href="login.php">here</a></p>
                </center>
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
