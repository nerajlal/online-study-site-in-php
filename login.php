<?php
	//include('head.php');
	include('dbconnect.php');

?>

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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
	</style>
</head>
<div class ="overlay">
<body background="image/home.jpg">
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
                            
                           <li class="active"><a href="index.php">HOME</a></li>

<li class="active"><a href="ureg.php">REGISTER</a></li>
                       
                        
<li><a href="login.php">LOGIN</a></li>
                                
                       
                         

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div> <!-- id="hero" class="hero overlay" -->
        <div> <!-- class="hero-content" -->
            <div> <!--  class="hero-text" -->
             <br>   

<center>
	<b><h1 style="color: white">Login</h1></b><br>
	<form method="POST">
		<table>
			<tr>
				<td style="margin-right: 30px">Email :</td><td><input type="email" name="email" class="form-control" style="margin-bottom: 20px; margin-left: 20px" required></td>
			</tr>
			<tr>
				<td style="margin-right: 30px">Password :</td><td><input type="password" name="password" class="form-control" style="margin-bottom: 20px; margin-left: 20px" required></td>

			</tr>
			<tr>
				<td></td><td><input type="submit" name="submit" style="padding: 10px 20px"></td>
			</tr>
		</table>
	</form>
</center>



                <!-- <p>Your clients on the internet. Learn how to receive them.</p> -->
                <!-- <a href="#" class="btn btn-border">Learn more</a> -->
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Career Plus</h2>
                        <p>Career plus is a platform that helps users to make their skills to the next
                        level. Here the classes and tests are done and make you more strength.</p>
                    </div>
                   <!--  <div class="col-sm-7 hidden-xs">
                        <img src="user/assets/img/ipad-pro.png" alt="">
                    </div> -->
                </div>
            </div>
        </section>
<?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$user=0;
	$id=0;

	$q="SELECT * from login WHERE email='$email' and password='$password' ";
	 //echo $q;
	 //break;
	 $m=mysql_query($q,$conn);
	if($m)
	{
	
		while($r=mysql_fetch_array($m)){
				$id=$r['lid'];
				$user=$r['user'];
				$status=$r['status'];
				 if($status==1)
	       {
	        $flag=1;
	  	    session_start();
	        //$type=$r['type'];
	        $_SESSION['email'] = $email;
	  	    $_SESSION['user'] = $user;
	  	    $_SESSION['lkey'] = $id;
	  	   // $_SESSION[$id];
	      }
			

			}
	
			
				
			
			// echo $user;
		if( $user=='user' && $status=='1' ){
				echo "<script>
					location.href='uhome.php';
				</script> ";
			}
		else if( $user=='tutor' && $status=='1' ){
				echo "<script>
					location.href='thome.php';
				</script> ";
			}
		else if( $status=='3'){
				echo "<script>
				location.href='a_home.php';
				</script>";
			}
	

		else{
				echo "<script> alert('user not registered ');
				location.href='login.php';
				</script>";
}
}
}

?>

