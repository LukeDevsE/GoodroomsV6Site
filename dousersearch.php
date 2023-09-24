<?php 
$userid = $_GET['userid'];
// Redirect user to the User Page
header("Location: profile?id=$userid");
?>