 <?php
    include('a_header.php');
    include('dbconnect.php')
    ?>
<center><br><br><br><br>
      <div class="container-fluid" style =" margin-left: 25%;">

   <section id="main-content">
      <section class="wrapper">
        <h2> Uploaded Materials  </h2>
        <div class="row mb">
          <!-- page start-->
          
<form action="" method="GET">

     <?php
                  $q="SELECT * fROM tutor where type='vedio'";
                  //echo $q;
                  $m=mysql_query($q,$conn);
                  // if($m){
                  //  echo "good";
                  // }
                  
                  while($r=mysql_fetch_assoc($m))
                    {

?>

        
              <div class="col-md-6">
                <div class="product-item">
                  <?php $key=$r['tutor_id']?>
                  <?php $ne=$r['file'];?>
                  <!-- <a href="car-details.php?id=<?php echo $key?>"> -->
                    <video width="300 px" height="300 px" controls>
  <source src="<?php echo $ne; ?>" type="video/mp4">
  Your browser does not support the video tag.
</video>
                  <div class="down-content">
                    <!-- <a href="car-details.php"><h4><?php echo $r['company']?> -->
                      <?php echo $r['topic']?></h4></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="a_delete.php?key=<?php echo $r['id']?>">delete</a>
                    <!-- <a href="a_delete.php?id=<?php echo $r['id']?>"><input type='submit' name='submit' value='Delete' class="btn btn-danger"></a> -->
                  </div>
                </div>
              </div>
            </form>
            </div>

           <?php

             }
             ?>

           
              
          </div>
        </div>
      </div>
    </div>
