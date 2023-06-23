<?php
include 'dbconnect.php';
session_start();
$uname = $_SESSION['email'];
//echo $uname;
$sql="select * from login where email='$uname'";
//echo $sql;
$m=mysql_query($sql,$conn);
while($r=mysql_fetch_assoc($m))
{
    $plan = $r['plan_status'];
    //echo $plan;
}
if($plan==0)
{
    echo "hai";
    echo "<script>location.href='uclass0.php';</script>";
}
else
{
    echo "hello";
    echo "<script>location.href='uclass1.php';</script>";
}



?>