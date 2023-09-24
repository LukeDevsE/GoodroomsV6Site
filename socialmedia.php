<style>
  .social-links {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
  }

  .social-links h1 {
    margin: 10px;
  }
</style>
<?php include 'member.php'; ?>
<html>
<head>
  <title>Social Media - GoodRooms</title>
  <?php
    session_start();
    $username = htmlspecialchars($_SESSION["username"]);
    $id = htmlspecialchars($_SESSION["id"]);
  ?>
  <?php include 'config.php'; ?>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <center>
    <h1>Social Media</h1>
    <p>Join us on our social media networks!</p>
    <hr>
    <iframe src="https://discordapp.com/widget?id=1080255739492323389&theme=dark&username=<?php echo $username; ?>" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    <div class="social-links">
      <h1><a href="http://forum.bluegr.cf" class="btn btn-primary" type="button"><i class="bi bi-chat-left-fill"></i> Forums</a></h1>
      <h1><a href="http://wiki.bluegr.cf" class="btn btn-primary" type="button"><i class="bi bi-book-fill"></i> Wiki</a></h1>
      <h1><a href="http://blog.bluegr.cf" class="btn btn-primary" type="button"><i class="bi bi-globe"></i> Blog</a></h1>
      <h1><a href="http://reddit.com/r/GoodRooms" class="btn btn-primary" type="button"><i class="bi bi-reddit"></i> Reddit</a></h1>
      <h1><a href="https://www.youtube.com/channel/UCEpjEx7kxGYEExVMV_gnqQA" class="btn btn-primary" type="button"><i class="bi bi-youtube"></i> YouTube</a></h1>
      <h1><a href="https://github.com/GoodRooms" class="btn btn-primary" type="button"><i class="bi bi-github"></i> GitHub</a></h1>
      <h1><a href="https://discord.gg/ZJdZHKr6bV" class="btn btn-primary" type="button"><i class="bi bi-discord"></i> Discord</a></h1>
    </div>
  </center>
  <?php include 'footer.php'; ?>
</body>
</html>
