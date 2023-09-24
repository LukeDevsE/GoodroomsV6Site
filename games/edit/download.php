<?php
$userid = $_GET['id'];
$link = mysqli_connect("s1.ct8.pl","m29812_config_gr","W5U.+j-9eo-T_J2Vfd/arDy1u9vEN0","m29812_gr");
if (!isset($userid)) {
    die("An Error Ocurred");  
}

$gufq = mysqli_query($link, "SELECT * FROM games WHERE id='$userid'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
$sqlquery = "SELECT * FROM games WHERE id='$userid'";
include '../../member.php';
 if ($getuserinfo["created_by"] == $username) {
  echo $getuserinfo["download"];
 } 
?>