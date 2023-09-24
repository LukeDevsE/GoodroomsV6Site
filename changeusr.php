<?php
  // BETA
  include 'config.php';
  include 'member.php';
  $newusername = $_GET['newusr'];
  echo $newusername;
  $gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
  $getuserinfoesses= mysqli_fetch_assoc($gufq);
  $moneyes = $getuserinfoesses["money"];
  $price = "100";
  if ($moneyes == "INF"){
  $sql = "UPDATE users SET username = '$newusername' WHERE id = $id";
   if (!empty($sql) && mysqli_num_rows(mysqli_query($link, "SELECT * FROM users WHERE username='$username'")) == 0) {
    if(mysqli_query($link, $sql) ){
    if($username == $newusername){
      $username = $newusername;
    header("Location: logout.php");
    } 
     }
    else
      {
      echo 'Unable to change username. Reason:'. mysqli_error($link) .'';
      }
   }
  }
  if($moneyes >= $price && $moneyes != "INF" ){
    $newblnc = $moneyes - $price;
  $sql = "UPDATE users SET username = '$newusername' WHERE id = $id";
      $sql2 = "UPDATE users SET money = '$newblnc' WHERE id = $id";
    if (!empty($sql) && mysqli_num_rows(mysqli_query($link, "SELECT * FROM users WHERE username='$username'")) == 0) {
    if(mysqli_query($link, $sql) ){
    if(mysqli_query($link, $sql2) ){
      if($username == $newusername){
        $username = $newusername;
    header("Location: logout.php");
    }
    }
      }
      
      if($username == $newusername){
        $username = $newusername;
    header("Location: logout.php");
    } else
      {
      echo 'Unable to change username. Reason:'. mysqli_error($link) .'';
      }
    }
  } else { header("Location: logout.php"); 
  }
  
  ?>