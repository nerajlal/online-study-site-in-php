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
body::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); /* set the opacity here */
  z-index: -1;
}
</style>
</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a class="site-title"><span>Career</span>Plus</a>

                </div><!-- /.navbar-header -->


                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        
                        <li></li>
                            
                            
                          <li class="active"><a href="uhome.php">HOME</a></li>
                           <li class="active"><a href="upgrade.php">Upgrade</a></li>
                           <li class="active"><a href="uclass.php">Vedio classes</a></li>
                           <li class="active"><a href="unotes.php">Notes</a></li>
                           <li class="active"><a href="viewexam.php">Attend Test</a></li>
                           <li class="active"><a href="uprofile.php">My Profile</a></li>
                           <li class="active"><a href="ufeedback.php">Feedback</a></li>
                           <li class="active"><a href="notification.php">Notifications</a></li>
                           <li><a href="logout.php">LogOut</a></li>

                            
                           

                                
                       
                         

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
                <div class="main">
    <h1>....NOTIFICATIONS....</h1>


    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i></h3>
        <!-- <div class="row mb"> -->
          <!-- page start-->
          <div>.</div>
           <div>.</div>
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>


    <!--  <div class="row">
     <div class="col-lg-6"> -->
     
       <form action="" method="POST">
          <div class="card card-default">
              

           <?php

              include 'dbconnect.php';
              $p=1;
                 //$uname=$_GET['id'];
                 //$uname=$_SESSION['username']; 
             session_start();
  			$uname=$_SESSION['email'];
              $result = "SELECT * FROM reply where senderid='$uname'";
              $m=mysql_query($result,$conn);
              while($row = mysql_fetch_assoc($m))
              {
              ?>
             
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Author</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $row['author'];?>" 
                         disabled="disabled">
                    <!-- </div> -->
               </div>
                    
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Subject</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['subject'];?>" 
                         disabled="disabled">
                    </div>
               <!-- </div> -->
               
               <div class="col-sm-12">
                    <!-- <label class="text-dark font-weight-medium" for="">Message</label> -->
                    <!-- <div class="input-group mb-2"> -->

                         <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $row['message'];?>" 
                         disabled="disabled">
                    <!-- </div> -->
               </div>

               
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for=""></label>
                    <div class="input-group mb-2">
          <!-- <a href=".php"
               <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">REPLY</button> -->
          </a>
          </div>
     </div>
     <div>
          .
     </div>
     <div>
          .
     </div>
     

              

               
               <?php
                 }
?>
          </div>
     </div></form>







            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

