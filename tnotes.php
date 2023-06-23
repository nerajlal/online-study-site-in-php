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
                



<center><br><br><br>
    <b><u><h1 style="color: white">Upload Notes</h1></u></b><br>
               
 <form action="" method="POST" enctype="multipart/form-data" >
    <table>
          <tr><td>  Topic Name</td><td><input type="text" name="name" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td></tr>
       
       
        <!-- <input type="text" name=""> -->
        
        <tr><td><input type="file" name="photo" required> </td><td>
        <input type="submit" name="submit" value="Upload"></td></tr>
  </table>
    </form>

<?php
if(isset($_POST["submit"])){

   $target_dir = "notes/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename( $_FILES["photo"]["name"])). " has been uploaded.";
   } else {
        echo "Sorry, there was an error uploading your file.";
    }


 $name=$_POST['name'];
    $q="INSERT into tutor(tutor_id,type,topic,file) values('11','pdf','$name','$target_file')";
    // echo $q;
    if(mysql_query($q,$conn))
    {
        echo "<script>alert('Note Added!');
                            location.href='tclass.php';
                    </script>";

    }
    else{
         echo "<script>alert('Notes Can't Add!');
                            location.href='tclass.php';
                    </script>";
    }



}
?>







            </div>
        </div>
    </div>

   