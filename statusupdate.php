<?php
include 'config.php';
include 'member.php';
include 'navbar.php';
echo '';
$userid = $id;
$newstatus = htmlspecialchars($_POST['status']);
$stmt = mysqli_prepare($link, "UPDATE `users` SET `status` = ? WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "si", $newstatus, $id);
mysqli_stmt_execute($stmt);
if(mysqli_stmt_execute($stmt)) {
  echo '<center><p>Done</p>';
  echo '<a href="/settings" type="button" class="btn btn-primary">Return to Settings</a>';
} else {
   echo "<p>Your status could not be updated, ". mysqli_stmt_error($stmt) ."</p>";

}

include 'footer.php';

?>