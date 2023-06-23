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
	<b><u><h1 style="color: white">REGISTRATION</h1></u></b><br><br>
<form method="POST">
	<table>
		<tr>
			<td>Name</td><td><input type="text" name="fname" class="form-control" style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Address</td><td><input type="text" name="address" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>User Type</td><td>
				<select name="user" id="user" class="form-control"  style="margin-bottom: 8px;margin-left: 8px">
				<option value="user">USER</option>
				<option value="tutor">TUTOR</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Phone</td><td><input type="text" name="phno" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" pattern="(?=.*[0-9]).{10}" title="10 digit phone number" required></td>
		</tr>
		<tr>
			<td>Email</td><td><input type="email" name="email" class="form-control"  style="margin-bottom: 8px;margin-left: 8px" required></td>
		</tr>
		<tr>
			<td>Password </td><td><input type="text" name="password" class="form-control" style="margin-bottom: 8px;margin-left: 8px>" 
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
					></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name="submit" value="submit" class="btn btn-success" style="padding: 10px 25px"></td>
		</tr>

	</table>
	
</form>
</center>
</div>
</div>
</div>

<main id="main" class="site-main">

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Career Plus</h2>
                        <p>Career plus is a platform that helps users to make their skills to the next
                        level. Here the classes and tests are done and make you more strength.</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="user/assets/img/ipad-pro.png" alt="">
                    </div>
                </div>
            </div>
        </section>


<?php

if(isset($_POST['submit'])){
	$name=$_POST['fname'];
	$address=$_POST['address'];
	$user=$_POST['user'];
	$phno=$_POST['phno'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$q="INSERT into login(email,password,user) values('$email','$password','$user')";
	// echo $q;
	if(mysql_query($q,$conn))
	{
		$id=0;
			$q1="select lid from login where email='$email' AND password='$password'";
			//echo $q1;
			$m=mysql_query($q1,$conn);
			while ($r=mysql_fetch_array($m)) {
				$id=$r['lid'];
			}
			$q2="INSERT INTO customer(name, email, address, phno, loginid) values('$name','$email','$address','$phno','$id')";
				$n=mysql_query($q2,$conn);
				if($m&&$n){
					echo "<script>alert('Your account has been created!');
							location.href='login.php';
					</script>";
				}
	}



}

?>


