<?php
$i = 0;
include 'dbconnect.php';
$id = $_GET['id'];

$qq = "SELECT qnno FROM qnmain WHERE testid='$id'";
$mm = mysql_query($qq, $conn);
if ($rr = mysql_fetch_assoc($mm)) {
    $pp = $rr['qnno'];
}

while ($i < $pp) {
    $q = "SELECT * FROM uploadqn WHERE testid=$id LIMIT 1 OFFSET $i" ;
    echo $q;
    $result = mysql_query($q, $conn);
    if ($row = mysql_fetch_assoc($result)) {
        ?>
        <form action="" method="POST">
            <b><i><?php echo $row['question']; ?></i></b><br>
            <input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optiona']; ?>"> <?php echo $row['optiona']; ?><br>
            <input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optionb']; ?>"> <?php echo $row['optionb']; ?><br>
            <input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optionc']; ?>"> <?php echo $row['optionc']; ?><br>
            <input type="radio" name="<?php echo $row['question']; ?>" value="<?php echo $row['optiond']; ?>"> <?php echo $row['optiond']; ?><br>
            <input type="submit" name="submit" value="SUBMIT" style="background:#59e552;">
        </form>
        <?php
        $i++;
    }
//if (isset($_POST['submit'])) {
    //echo $i;
  //  $i= $i + 1;
    //echo $i;
   // }
}


?>
