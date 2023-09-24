<?php include '../member.php'; ?>
<html>
<head>
<title>Catalog - GoodRooms</title>
<?php include '../config.php'; ?>
<?php 
   $gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
  $sqlquery = "SELECT * FROM users WHERE id='$userid'";
  $bio = $getuserinfo['bio'];
  if ($bio == "Content Deleted"){
   header("Location: https://bluegr.cf/banned");
  } 
  
?>
</head>
<body>
<?php include '../navbar.php'; ?>
<center>
   <a href="/catalog/" class="btn btn-primary" type="button" >Catalog</a><a href="/catalog/decals" type="button" class="btn btn-secundary"><font color="white">Decals</font></a>
  <?php
// Connect to the database and execute a SELECT query
$result = mysqli_query($link, 'SELECT * FROM catalog ORDER BY id DESC');


// Loop through the result set and display the data
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['Icon'];
    $id = $row['id'];
    $created_by = $row['created_by'];

    // Echo the HTML for the card
echo '<a href="view.php?id=' . $id . '" style="text-decoration: none;">';
echo '<div class="card border-primary mb-3" style="max-width: 20rem;">';
echo '<img src="' . $image . '">';
echo '<div class="card-header text-black">' . $name . '</div>';
echo '<div class="card-body">';
echo '<h4 class="card-title text-black">By ' . $created_by . '</h4>';
echo '</div>';
echo '</div>';
echo '</a>';
}
?>
  
  
  <hr>
<?php
//  <div id="clockwork">
//<a href="view.php?id=1" style="text-decoration: none;"><div class="card border-primary mb-3" style="max-width: 20rem;">
//  <img src="/img/RawAsset.png">
 // <div class="card-header text-black">Clockwork Sunglasses</div>
 // <div class="card-body">
  //  <h4 class="card-title text-black">By PressTpro</h4>
  //</div>
//</div>
//</a>
 // </div>
?>
<?php include '../footer.php'; ?>
