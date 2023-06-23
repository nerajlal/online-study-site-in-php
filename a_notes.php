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
                  $q="SELECT * fROM tutor  where type='pdf'";
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
                    <object data="<?php echo $ne; ?>" type="application/pdf" width="250" height="275">
  <p>Sorry, your browser does not support embedded PDFs.</p>
</object>
                  <div class="down-content">
                    <!-- <a href="car-details.php"><h4><?php echo $r['company']?> -->
                      <?php echo $r['topic']?></h4></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="a_delete.php?key=<?php echo $r['id']?>">delete</a>
                      
                    <!-- <a href="delete.php?<?php echo $r['file']?>"><input type='submit' name='submit' value='Delete' class="btn btn-danger"></input></a> -->
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
