<!DOCTYPE html>
<html>
<head>
  <title>Home - GoodRooms</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    include 'config.php';
    include 'member.php';
    
    $gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
    $getuserinfo = mysqli_fetch_assoc($gufq);
    $bio = $getuserinfo['bio'];
    
    if ($bio == "Content Deleted"){
      header("Location: https://goodrooms.xyz/banned");
    }
    
    $image = "/img/BetterNewCharacter.png";
    $file_pointer = 'img/Characters/'.$id.'.png';
    if (file_exists($file_pointer)) {
      $image = "$file_pointer";
    }
  ?>
  <style>
    /* Your existing CSS styles go here */

    /* Mobile-friendly styles */
    @media (max-width: 768px) {
      body {
        /* Adjust the styles for mobile devices */
        font-size: 14px;
      }

      h1 {
        font-size: 24px;
      }

      #goodrooms-options {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      /* Example: stack the options vertically on smaller screens */
      #goodrooms-options a {
        display: block;
        margin-bottom: 10px;
      }
    }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <center>
    <?php
      $f_contents = file(dirname(__FILE__)."/welcomemessages.txt");
      $line = $f_contents[rand(0, count($f_contents) - 1)];
    ?>

    <h1><a href="/profile?id=<?php echo $id ?>"></a> <?php echo $line." ". $username . "!"; ?></h1><br>
    <img width="256" src="<?php echo $image ?>" alt="User Avatar">
    <p><br>
      GR News: GR Mobile, Xbox, and Microsoft Store will come out soon.
    </p>

    <div id="goodrooms-options">
      <h4>Options</h4>
      <a href="/profile?id=<?php echo $id ?>" type="button" class="btn btn-primary">My Profile</a>
      <a href="/settings#account-deletion" type="button" class="btn btn-danger">Delete My Account</a>
      <a href="/settings#changebio" type="button" class="btn btn-info">Change My Bio</a>
      <a href="/feed" type="button" class="btn btn-dark">Feed</a>
      <a href="/devhub" type="button" class="btn btn-info"><i class="bi bi-tools"></i></a>
      <a href="/logout.php" type="button" class="btn btn-warning">Logout</a>
    </div>
  </center>

  <?php include 'footer.php'; ?>

  <?php
    // mysqli_query($link, "UPDATE users SET lastactivity = ".time()." WHERE id = ".$id);
  ?>
</body>
</html>
