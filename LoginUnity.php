<?php
// Connect to MySQL database
include 'config.php';

// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Get the user's login credentials from Unity
$username = $_POST["username"];
$password = $_POST["password"];

// Query the database for the user's information
$result = mysqli_query($link,"SELECT * FROM users WHERE username='$username'");

// Check if the query returned a valid user
if(mysqli_num_rows($result) > 0){
  // Retrieve the hashed password from the database
  $row = mysqli_fetch_assoc($result);
  $hashed_password = $row['password'];
  
  // Verify the entered password against the hashed password
  if(password_verify($password, $hashed_password)){
    echo "Login successful";
  } else {
    echo "Invalid password";
  }
} else {
  echo "Invalid username";
}

// Close the database connection
  mysqli_close($link);
?>
