<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: https://goodrooms.xyz/login.php");
    exit;
}
  session_start();
$username = htmlspecialchars($_SESSION["username"]);
$id = htmlspecialchars($_SESSION["id"]);
$money = htmlspecialchars($_SESSION["money"]);
$bio = htmlspecialchars($_SESSION["bio"]);
$lastonline = htmlspecialchars($_SESSION["lastactivity"]);
$xit = htmlspecialchars($_SESSION["xit"]);
$forumid = htmlspecialchars($_SESSION["forumid"]);
  $role = htmlspecialchars($_SESSION["role"]);
$grplus = htmlspecialchars($_SESSION["grplus"]);
$adminpermissions = htmlspecialchars($_SESSION['admin']);
  if ($bio == "Content Deleted"){
  header("Location: https://bluegr.cf/banned");
}
?>