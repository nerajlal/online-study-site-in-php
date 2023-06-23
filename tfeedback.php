<?php
    //include('head.php');
    include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Career Plus</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="user/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="user/assets/img/favicon.png">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="user/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="user/assets/css/style.css" rel="stylesheet">
    <link href="user/assets/css/responsive.css" rel="stylesheet">
<style>
    body {
            background-image: url("image/home.jpg");
            background-repeat: no-repeat;
            
            background-size: cover;
        }
        .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }
  html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    color: #2be083;
}
</style>
</head>
<div class ="overlay">
<body background="image/home.jpg" height="100%" width="100%">
</div>
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a class="site-title"><span>Career</span>Plus</a>

                </div><!-- /.navbar-header -->


                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        

                        
                        <li></li>
                            
                           <li class="active"><a href="thome.php">HOME</a></li>
                           <li class="active"><a href="tclass.php">Upload Vedio class</a></li>
                           <li class="active"><a href="tnotes.php">Upload Notes</a></li>
                           <li class="active"><a href="tuploads.php">My Videos</a></li>
                            <li class="active"><a href="tpdfuploads.php">My Notes</a></li>
                            <li class="active"><a href="tprofile.php">My Profile</a></li>
                            <li class="active"><a href="tfeedback.php">Send Feedback</a></li>
                           <li><a href="logout.php">LogOut</a></li>

 </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div> <!-- id="hero" class="hero overlay" -->
        <div> <!-- class="hero-content" -->
            <div> <!--  class="hero-text" -->
                

 


           <!--    <div class="col-md-6">
                <div class="product-item">
 -->
                 
                 <section id="main-content">
      <section class="wrapper">
        
      
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>

<?php
session_start();
  $uname=$_SESSION['email'];
?>

<center>
       <form action="" method="POST">
        <!-- <div class="card card-default"> -->
            <!-- <div class="card-header card-header-border-bottom"> -->
                <h2>Update Username / Password</h2><br><h2>Send Feedback</h2>
            <!-- </div> -->

         <form id="contact" action="" method="POST">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
<!--                   <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div> -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" name="msg" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>




               
            </div>
        </div>
    </div>
    <?php
include('dbconnect.php');

if(isset($_POST['msg']))
{
       $name=$_POST['name'];
      $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];
      session_start();
      $lid=$_SESSION['lkey'];

      $q="INSERT INTO CONTACT(senderid,name, email, subject, message) VALUES('$lid','$name','$uname','$subject', '$message')";
      $m=mysql_query($q,$conn);
      if($m)
      {
        echo"<script>alert('Message successfully sent');
          location.href='tfeedback.php';
      </script>";
      }
      

}


?>
