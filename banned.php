<?php
  include 'config.php';
include 'member.php';
  include 'navbar.php';
  $gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
  $sqlquery = "SELECT * FROM users WHERE id='$userid'";
  $bio = $getuserinfo['bio'];
  if ($bio == "Content Deleted"){
    echo "<head>
          <title>Banned  - GoodRooms</title>
          </head>
          <body>
          <center>
          <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
  <div class='card-header'>Account Deleted</div>
  <div class='card-body'>
    <h4 class='card-title'>We're Sorry</h4>
    <p class='card-text'>Your GoodRooms account has been deleted for breaking the GoodRooms Rules. Make sure to follow our Community Rules.</p>
      <p>You think your ban is false? dont worry. Mail info@bluegr.cf with proof of why you should be unbanned.</p>
      <br>
  <a href='mailto:info@bluegr.cf' type='button' class='btn btn-primary'>Mail GoodRooms</a>
      <a href='/logout' class='btn btn-danger' type='button'>Logout</a>
  </div>
</div> 
</center>
      </body>
         </html>";
    
  } else {
      echo "<center>What are you doing here? You're not banned, That means you can still enjoy GoodRooms </center>";
  }
  include 'footer.php';
?>