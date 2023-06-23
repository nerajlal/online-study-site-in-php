
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

</head>
<style>


        .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: -1;
  }
  
  #pay_button_daily {
  background-color: #2196F3;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#pay_button_daily:hover {
  background-color: #2196F3;
}
#pay_button_weekly {
  background-color:#E91E63;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#pay_button_weekly:hover {
  background-color: #E91E63;
}
#pay_button_monthly {
  background-color: #FF9800;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

#pay_button_monthly:hover {
  background-color: #FF9800;
}
.box {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
    color: #333;
}

.box-heading {
    color: #f44336;
    margin-top: 0;
    margin-bottom: 10px;
}

.box p {
    margin-top: 0;
    margin-bottom: 10px;
}

.box a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f44336;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.2s;
}

.box a:hover {
    background-color: #c62828;
}
.box {
  width: 50%;
  text-align: center;
}

    </style>
<body>

    <header id="masthead" class="site-header" >
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <a class="site-title"><span>Career</span>Plus</a>

                </div>


                <div class="collapse navbar-collapse" id="agency-navbar-collapse">
<form method ="POST" action="">
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
<br><BR>
<div class="col-md-12">
           <center> <a href="viewexam.php" style="color:white;"><input type="button" name="submit" value="Return To Main Page" style="background:#59e552;"></a><br>

   <h3><b style="color:#23d7ed"><u><i>CORRECT ANSWERS</i></u></b></h3><br></center>

<?php 
include('mastercontroller.php');
$id = $_GET['id'];
//$id = 40;
$qqqq = "SELECT qnno FROM mainpage WHERE testid=$id";
$mmmm = mysql_query( $qqqq,$conn);
if ($rrrr = mysql_fetch_assoc($mmmm)) {
    $pppp = $rrrr['qnno'];
    //echo $pppp;
}
$k=0;


if($k < $pppp){
$q = "SELECT * FROM questions WHERE testid=$id ";
//echo $q;
$m=mysql_query($q,$conn);

                 while($row=mysql_fetch_assoc($m))
                   {
?>
<?php $ans= $row['correctans'];
      $ans1= $row['optiona']; 
      //echo $ans;
      //echo $ans1;
      ?>
            <!-- <div class="col-md-6"> -->
            <form action="" method="POST" onsubmit="return validateForm()">
           
                <b><?php echo $row['question']; ?></b><br>

<?php 
    if($ans=='A')
    {
    ?>
        <font color="green"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optiona']; ?>" > <?php echo $row['optiona'];?></font><br>
    <?php
    }
    else
    {
    ?>
        <font color="red"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optiona']; ?>" > <?php echo $row['optiona'];?></font><br>
<?php
    }
?>

<?php 
    if($ans=='B')
    {
    ?>
        <font color="green"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optionb']; ?>" > <?php echo $row['optionb'];?></font><br>
    <?php
    }
    else
    {
    ?>
        <font color="red"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optionb']; ?>" > <?php echo $row['optionb'];?></font><br>
<?php
    }
?>
                
                <?php 
    if($ans=='C')
    {
    ?>
        <font color="green"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optionc']; ?>" > <?php echo $row['optionc'];?></font><br>
    <?php
    }
    else
    {
    ?>
        <font color="red"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optionc']; ?>" > <?php echo $row['optionc'];?></font><br>
<?php
    }
?>
                
                <?php 
    if($ans=='D')
    {
    ?>
        <font color="green"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optiond']; ?>" > <?php echo $row['optiond'];?></font><br>
    <?php
    }
    else
    {
    ?>
        <font color="red"><input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optiond']; ?>" > <?php echo $row['optiond'];?></font><br>
<?php
    }
?>         
    
    
    
            <!-- <input type="submit" name="submit" value="SUBMIT" style="background:#59e552;"> -->
        </form>


        <script>
            function validateForm() {
                var options = document.getElementsByName("<?php echo $currentQuestion; ?>");
                var checked = false;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].checked) {
                        checked = true;
                        break;
                    }
                }
                if (!checked) {
                    alert("Please select an option.");
                    return false;
                }
                return true;
            }
        </script>
        <?php
    }
  }
?>

<?php
if (isset($_POST['submit']))
{
  $k++;
}
?>

          </div>
        </div>
      </div>
    </div>

 