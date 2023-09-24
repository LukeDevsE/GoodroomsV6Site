<?php
include 'config.php';
include 'navbar.php';
include 'member.php';
?>
<html>
<head>
<title>Create - GoodRooms</title>
</head>
<body>
<div id="developer-hub" >
<?php //<a href="/games/upload/" class="btn btn-success" type="button">Upload a Game</a> ?>
<hr><center>
<h2>My Games</h2></center>
<center>
    <div class="card-group" style="width: 75%">
  <?php
  $result = mysqli_query($link, 'SELECT * FROM games WHERE created_by = "'.$username.'" ORDER BY id DESC');


// Loop through the result set and display the data
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['image'];
    $id = $row['id'];
    $created_by = $row['created_by'];

    // Echo the HTML for the card
    echo '<div class="card" style="width: 18rem;" id="'. $name .'">';
    echo '<img src="' . $image . '" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-black">' . $name . '</h5>';
    echo '<a href="/games/edit/?id=' . $id . '" class="btn btn-primary">Edit</a>';
    echo '<a href="/games/edit/download?id=' . $id . '" download="map.gr" class="btn btn-success">Download</a>';
    echo '</div>';
    echo '</div>';
}
?>
  </div>
<hr>
<center>
<h2>Decals</h2>
   <form action="/catalog/uploaddecals.php" method="POST" enctype="multipart/form-data">
         <font color="white"><input type="file" class="form-control" name="image" /></font>
         <input type="submit" class="btn btn-primary" value="Upload Decal"/>
      </form>
</center>
<hr>
 <hr>
  <h3>GR Docs (aka. Developer GR)</h3>
  <p>Coming Soon...</p>
      
</div>
<?php include 'footer.php';?>