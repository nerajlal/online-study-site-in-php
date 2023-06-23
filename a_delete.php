<?php
include('dbconnect.php');
$ne=$_GET['key'];
//echo $ne;

$sql="delete from tutor where id='$ne'";
if(mysql_query($sql,$conn))
	{
		echo "<script>alert('File Deleted!');
							location.href='a_materials.php';
					</script>";
	}


?>