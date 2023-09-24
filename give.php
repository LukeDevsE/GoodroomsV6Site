<?php
include 'config.php';
include 'navbar.php';
include 'member.php';
// Get the Money to give
$moneytogive = $_POST['roombuxtogive'];
$useridtogive = $_POST['userid'];
$balance = $money;
if($balance === "INF"){
   $userbalance = mysqli_fetch_assoc(mysqli_query($link, "SELECT money from users WHERE id = $useridtogive"))['money'];
$usrnewbalance = (int)$userbalance + (int)$moneytogive;
   $newusrbalance = mysqli_query($link, "UPDATE users SET money = $usrnewbalance WHERE id = $useridtogive");
   echo 'Done';
}
if($balance >= $moneytogive){
   $newbalance = $balance - $moneytogive;
   $userbalance = mysqli_fetch_assoc(mysqli_query($link, "SELECT money from users WHERE id = $useridtogive"))['money'];
   
$usrnewbalance = (int)$userbalance + (int)$moneytogive;
  $addbalance = mysqli_query($link, "UPDATE users SET money = $newbalance WHERE id = $id");
   $newusrbalance = mysqli_query($link, "UPDATE users SET money = $usrnewbalance WHERE id = $useridtogive");
   echo 'Done';
} else {
    $amountmore = $moneytogive - $balance;
    echo '<p>You dont have Enough RoomBux to Gift, You need '. $amountmore. 'Roombux</p>';
    exit;
}
?>