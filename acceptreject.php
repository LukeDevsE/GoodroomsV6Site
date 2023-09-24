<?php
// Get the user IDs of the sender and recipient
$sender_id = $_POST['sender_id'];
$recipient_id = $_POST['viewer_id'];

// Connect to the database
include 'config.php';
echo $sender_id;
echo $recipient_id;
if (isset($_POST['accept'])) {
    // Accept the friend request
    echo 'accept';
    $query = "UPDATE friends SET confirmed = 1 WHERE user_id = ? AND friend_id = ?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("ii", $sender_id, $recipient_id);
    $stmt->execute();
} else {
    // Reject the friend request
    echo 'reject';
    $query = "DELETE FROM friends WHERE user_id = ? AND friend_id = ?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("ii", $sender_id, $recipient_id);
    $stmt->execute();
}

// Redirect the user back to the previous page
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;
?>
