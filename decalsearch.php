<?php
  include 'config.php';
  $decal = $_GET['decal'];
  header("Location: /catalog/decals.php#$decal");
  ?>