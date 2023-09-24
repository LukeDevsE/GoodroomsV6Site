<?php include '../member.php'; ?>
<html>
<head>
<title>Downloads  - GoodRooms</title>
<?php include '../config.php'; ?>
<?php 
   $gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
  $sqlquery = "SELECT * FROM users WHERE id='$id'";
  $bio = $getuserinfo['bio'];
  if ($bio == "Content Deleted"){
   header("Location: https://bluegr.cf/banned");
  } 
  
?>
</head>
<body>
<?php include '../navbar.php'; ?><script src="../konami.js"></script>
<script>
 const easterEgg = new Konami("http://bluegr.cf/cheats")
   easterEgg.pattern = "38383838384040404040"
</script>
<center>

<h1>GoodRooms Download Center</h1>
  <!--
<p>Downloads coming soon...</p>

  -->
  <hr>
  <div id="Client">
<h3>GoodRooms Beta 5.0</h3>
<p>The Goodrooms Beta 5.0 is now out! (Character is now better, you can join user made games inside of the game, jumping works better, jumping animation, controller support, and for the installer you no longer need admin perms)</p>
<a href="/download/GoodroomsBeta5.0Installer.exe" class="btn btn-primary" type="button"><i class="bi bi-microsoft"></i> Windows Download</a>
    <a href="https://apibluegr.cf/download/GoodroomsBeta5.0.zip" class="btn btn-primary" type="button"><i class="bi bi-microsoft"></i> Windows Portable Download</a>
    <a href="/download/Goodroomsbeta5.0macthing.app.zip" class="btn btn-primary" type="button"><i class="bi bi-apple"></i> Mac Download</a>
    <a href="https://www.xbox.com/en-CA/games/store/goodrooms/9NXQTLSFB0SJ" class="btn btn-primary" type="button"><i class="bi bi-xbox"></i> Xbox Download</a>
</div>
  <hr>
  <h2>Instructions on how to play goodrooms on mac</h3>
  <h5>first download and extract, second right click(control + click), click open, wait, then it will say "apple cant check this for viruses" go to your settings, security & privacy and then press open anyway 
  <!--
<div id="Client">
<h3>GoodRooms v5 2010</h3>
<p>Enjoy GoodRooms like in old Times, The 2010 Client is Officially Out! Enjoy it, Start in Launcher.bat</p>
<a href="/asset/GR2010.zip" class="btn btn-primary" type="button"><i class="bi bi-microsoft"></i> Windows Download</a>
<h3>GoodRooms v5 2008</h3>
<p>Enjoy GoodRooms like in 2008, The 2008 Client is Officially Out! Enjoy it, Start in Launcher.bat</p>
<a href="/asset/Goodrooms2008.zip" class="btn btn-primary" type="button"><i class="bi bi-microsoft"></i> Windows Download</a>
</div>
<hr>
  <div id="Launcher">
    <h3>GoodRooms Launcher</h3>
    <p>Every GoodRooms Version comes with a Launcher Included, Here you can download the Launcher</p>
    <a href="/asset/Launcher.bat" class="btn btn-primary" type="button"><i class="bi bi-microsoft"></i> Windows Download</a>
    </div>
    <div id="Godo">
    <h3>GodoRooms</h3>
    <p>GodoRooms Haves a separate download page <br> <a href="/godo" type="button" class="btn btn-primary"><i class="bi bi-download"></i> Godo Downloads</a>
<p class="text-white">Searching for Custom Avatar Uploader? It is now in <a href="/settings">Settings</a><p>
  -->
<?php include '../footer.php'; ?>
</body>
</html>