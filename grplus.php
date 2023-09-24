<?php
  session_start();
  $username = htmlspecialchars($_SESSION["username"]);
  $id = htmlspecialchars($_SESSION["id"]);
  header("Location: home.php");
  exit;
?>
<html>
  <head>
    <?php include 'config.php'; ?>
    <title>GR+ - GoodRooms </title>
    </head>
  <body>
    <?php include 'navbar.php'; ?>
    <center>
      <h1><img src="/img/GR+full.png"></h1>
      <h2>Expand your Rooms</h2>
      <h4><a style="text-decoration: none;" href="/grplus" onclick="window.alert('To get it you must win a giveaway or Boost our Discord')">How to get</a> <a style="text-decoration: none;" href="https://discord.gg/JyPZZe37Wj" onclick="window.alert('Going...')"> Discord Server</a></h4>
     <p>GoodRooms+ is a Membership that allows you to get a expanded experience in the site
      </p>
     
     <h3>Features</h3>
     <li>1500 <img src="/img/Roombux3D.png" weight="32" height="32"> and 5000 <img src="/img/XITNEW.png" weight="32" height="32"> Monthly</li> 
     <li>GR+ Icon in your Profile</li>
      <li>Special Lounge in the Discord Server</li>
      <li>Golden Role in the Discord</li>
      <li>Boosters Only: 1 GR+ Membership (3 Months) to Gift to another user</li>
         <li>Special Avatar inside the game</li>
      <li>GoodRooms Golden Hat</li>
      <h3>GR+ Types</h3>
          <li>GR+ Gift - 3 Months</li>
      <li>GR+ Basic - 6 Months (1 Boost)</li>
      <li>GR++ - 1 Year (3 Boosts)</li>
      <li>GR++Boosted - 1 Year, 6 Months (12 Boosts)</li>
      <li>PermaGR+ - Until leave (Only for Staff)</li>
      <h3>Notes</h3>
      <br>- GR+ Gift haves 300 GR$ and 600 XIT instead<br>-GR++ Boosted can be renovated with 2 boosts 1 day after it expires, it renews to 6 months more<p>
      <h6><font color="red">Staff will get PermaGR+ after approbed from staff test, if youre already staff and does not have the membership, mail info@bluegr.cf</font></h6>
        </center>
    <?php include 'footer.php';?>
       </body>
       </html> 