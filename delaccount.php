<?php include 'member.php';
include 'config.php';
include 'navbar.php'; ?>
          <?php
echo "<center>";
// Remove User
if($_POST['delete'] == "Delete"){
$sql = "DELETE FROM users WHERE id=". $id ."";

if ($link->query($sql) === TRUE) {
    $delfriends = mysqli_query($link,"DELETE FROM friends WHERE userid=". $id ." OR recipentid = ". $id);
    if($delfriends){
        echo '<p>Your Friends are Now Deleted</p><br>';
    } else{
        echo '<p>Could not delete your Friends</p><br>';
    }
  echo "<p>Account Deleted, Thanks for being in goodrooms</p>";
} else {
  echo "<p>Account Deletion Error: " . $link->error . "</p>";
}

} else {
    header("Location: settings.php");
}
  session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
echo "</center>";
include 'footer.php';
?>