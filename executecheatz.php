<?php
  echo '<title>Cheats - GoodRooms</title>';
  include 'config.php';
  include 'navbar.php';
  echo '<center>';
  $ggcode = $_GET['cheat'];
  if($ggcode == "U S E R G O" ){
  echo'<form method="post" action="search">
    <input type="text" class="form-control" name="username" placeholder="User Name">
    <input type="submit" value="Go" class="btn btn-primary"</form>';
  }
    if($ggcode == "D E C A L" ){
  echo'<form method="get" action="/decalsearch">
    <input type="text" class="form-control" name="decal" placeholder="Decal">
    <input type="submit" value="Go" class="btn btn-primary">
    </form>';
  }
    echo '</center>';
   include 'footer.php'; 
  ?>