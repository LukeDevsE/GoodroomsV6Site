<?php
// Get the user IDs of the sender and recipient
$sender_id = $_POST['user_id'];
$recipient_id = $_POST['friend_id'];

// Connect to the database
include 'config.php';

// Insert a row into the friends table to create the friend request
          $sqlquery = "INSERT INTO friends (user_id, friend_id, confirmed) VALUES ($sender_id, $recipient_id, false);";
          if (mysqli_query($link, $sqlquery)) {
             echo "FRIEND";
          } else {
              echo "ERROR: " . mysqli_error($link);
       }  

// Redirect the user back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>