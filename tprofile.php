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
 



       <form action="" method="POST">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Update Profile</h2>
            </div>

           <?php

             
              //$p=1;
              session_start();
              //$uname=$_GET['id'];
              $lid=$_SESSION['lkey']; 
              $result = mysql_query("SELECT * FROM login where lid=$lid");

              while($row = mysql_fetch_array($result))
              {
              ?>
     
             

     
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for="">User Name</label>
                <div class="input-group mb-2">

                    <input type="email" class="form-control" id="hname" name="email" value="<?php echo $row['email'];?> required" 
                    >
                </div>
            </div>
            
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for="">Password</label>
                <div class="input-group mb-2">

                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>" 
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
                    >
                </div>
            </div>
            
        
            <div class="col-sm-12">
                <label class="text-dark font-weight-medium" for=""></label>
                <div class="input-group mb-2">
            <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">Update</button>
        </div>
    </div>
    <div>.</div>
          <div>.</div>
          <div>.</div>

            <?php
              }
?>
        </div>
    </div></form>
<?php
                              //include 'includes/dbconnect.php';
                             if(isset($_POST['submit']))
                             {
                                 
                                
                                  


                                 $sql="update login set email='$_POST[email]',password='$_POST[password]' where lid=$lid";

                                 //echo"$sql";
                                 $result=mysql_query($sql,$conn);
                                if($result)
                                {
                                    echo "<script>alert('Password updated!');location.href='thome.php';</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Not updated!');location.href='thome.php';</script>";
                                }
                             }  
                                
                         
                            
                        ?>

    
</div>


    

        

        

        


