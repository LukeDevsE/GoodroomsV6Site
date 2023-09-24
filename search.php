<?php

// Connect to the database
include 'config.php';

// Sanitize the search term
$username = mysqli_real_escape_string($link, $_POST['username']);

// Construct the SELECT query
$query = "SELECT id FROM users WHERE username = '$username'";

// Execute the query
$result = mysqli_query($link, $query);

// Check if the query returned a result
if (mysqli_num_rows($result) > 0) {
  // Retrieve the ID from the result set
  $row = mysqli_fetch_assoc($result);
  $id = $row['id'];
  header('Location: /profile?id='.$id);
  exit;
}
else {
header("Location: {$_SERVER['HTTP_REFERER']}");
  exit;
}

?>
