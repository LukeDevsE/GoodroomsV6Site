<?php include 'member.php';
include 'config.php'; 
header("Location: home");
if(isset($_GET['more'])){
$fakeroombux = +1000000000000;
 $newrombux = $money + $fakeroombux;
 echo 'you have now'. $newrombux.' roombux';
}
 echo '<form action="" method="get"><input type="submit" name="more" value="+roombux"></form>'
 ?>
