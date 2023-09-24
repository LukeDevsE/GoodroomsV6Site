<?php
// GoodRooms Core Engine
// GRCore is the GoodRooms Core, Is the Connection of the Site with the Databases and Manages the Site settings
// MySQL(i) Connection
// if($_GET['pass'] == 'aH6MdTQp'){
  $link = mysqli_connect("s1.ct8.pl","USER","PASS","DB");
  // Version Data
  $namefull = "GoodRooms Sixth Version";
  $namedef = "GoodRooms 6";
  $versiondesc = "GoodRooms Reimagined";
  $griconimg = "/img/NewGRIcon.png";
  $clientamount = "1";
  // Engine Versions
 // This Defines the Version of the Core
  $grenginever = "1.5";
  // GoodRooms Version
  $grver = "6";
  // Maintenance Engine
  // This Engine Is Used to enable/disable the maintenance on the site
  $maintenance = false;
  if($maintenance == true){
    header("Location: maintenance");
  }
// }
    session_start();
  $username = htmlspecialchars($_SESSION["username"]);
  $id = htmlspecialchars($_SESSION["id"]);
?>
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
    }
  </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script><link rel="shortcut icon" href="/img/NewGRIcon.png">
<!-- Metadata --><meta name="title" content="GoodRooms 6" />
<meta name="description" content="GoodRooms - your hub for online multiplayer gaming. Play user-made games, connect with friends, or create your own gaming adventures. Join now and unleash endless gaming possibilities!">
<meta name="author" content="The GoodRooms Team" />
<meta name="owner" content="The GoodRooms Team" />
<meta name="copyright" content="(c) 2023 The GoodRooms Team, Formely we're amazing Team" />
<meta property="og:image" content="/img/NewerLogo.png">
<meta property="og:title" content="GoodRooms">
<meta property="og:description" content="GoodRooms - your hub for online multiplayer gaming. Play user-made games, connect with friends, or create your own gaming adventures. Join now and unleash endless gaming possibilities!">
<?php
  // Add the Easter Egg
  include 'cheatzeasteregg.php';
  ?>