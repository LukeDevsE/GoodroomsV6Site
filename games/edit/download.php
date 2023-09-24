<?php
$userid = $_GET['id'];
$link = mysqli_connect("s1.ct8.pl","USER","PASS","SERVER");
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
