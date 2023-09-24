<head>
<title>cheatz  - GoodRooms</title>
<?php include 'config.php'; ?>
<?php
  session_start();
  $username = htmlspecialchars($_SESSION["username"]);
  $id = htmlspecialchars($_SESSION["id"]);
  $cheats = "2"
?>
</head>
<body>
<?php include 'navbar.php'; ?>
<center>
  <h1>cheatz</h1>
  <p>hello, welcome to cheatz, where you cheat </p>
  <p>Cheatz list</p>
  <p>There are Currently <?php echo $cheats ?> Cheats
  <p>U S E R G O<br>D E C A L
   <form action="/executecheatz.php" method="get">
     <input type="text"  class="form-control" name="cheat" placeholder="What will be your Cheat?">
     <input type="submit" value="Inject" class="btn btn-primary">
     </form>
<?php include 'footer.php'; ?>
</body>
</html>