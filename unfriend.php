<?php
// Get the user IDs of the sender and recipient
$sender_id = $_GET['friend_id'];

// Connect to the database
include 'config.php';
include 'member.php';
$recipient_id = $id;
// Delete the row from the friends table
$query = "DELETE FROM friends WHERE (user_id = ? AND friend_id = ?) OR (user_id = ? AND friend_id = ?)";
$stmt = $link->prepare($query);
$stmt->bind_param("iiii", $sender_id, $recipient_id, $recipient_id, $sender_id);
$stmt->execute();

// Redirect the user back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>