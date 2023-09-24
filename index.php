<html>
<head>
  <?php
include 'config.php';
  session_start();
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
?>
<?php include 'navbar.php';?>
<title>Welcome - GoodRooms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Your responsive CSS styles go here */

    /* Example: Adjust font size for better readability on small screens */
    body {
      font-size: 16px;
    }
    @media (max-width: 768px) {
      /* Additional responsive styles for smaller screens */
      body {
        font-size: 14px;
      }
      img {
      width: 100%;
      }
    }
  </style>
</head>
<body>
<center><img src="/img/NewLogo.png"><br><h3>Built in a Good Room</h3><br><p>Goodrooms is a online multiplayer game platform, where you can play user made games, play with your friends or meet friends, or you could make your own game for others to enjoy.  <br><a href="/login"type="button" class="btn btn-primary">Login</a><a href="/register" type="button"class="btn btn-success">Register</a></center>
<?php include 'footer.php'; ?>
</body>
</html>