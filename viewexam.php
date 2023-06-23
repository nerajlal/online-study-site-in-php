
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
table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }
        a {
            display: inline-block;
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        a:hover {
            background-color: #008000;
            
        }
</style>
</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   
                    <b class="site-title"><span>Career</span>Plus</b>

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
                           <li class="active"><a href="logout.php">LogOut</a></li>

                            
                           

                                
                       
                         

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

<body><br>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Sr no</th>
                    <th>Test Name</th>
                    <th>Date Posted</th>
                    <th>Total Questions</th>
                    <th>Attend</th>         
                </tr>
            </thead>
            <tbody>
                <?php
                $q = "SELECT * FROM mainpage";
                $m = mysql_query($q, $conn);
                $i = 1;
                while ($r = mysql_fetch_assoc($m)) {
                    ?>
                    <tr>
                        <td><?php echo $i ?></td> 
                        <td><?php echo $r['testname'] ?></td>              
                        <td><?php echo $r['dated'] ?></td>
                        <td><?php echo $r['qnno'] ?></td>
                        <td>
                            <a href="viewtest.php?id=<?php echo $r['testid']; ?>">
                                ATTEND TEST
                            </a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>