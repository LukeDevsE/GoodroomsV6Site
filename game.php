<html>
<head>
<title>Games - GoodRooms</title>
<?php include 'config.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Your responsive CSS styles go here */

    /* Example: Adjust font size for better readability on small screens */
    body {
      font-size: 16px;
    }

    @media (max-width: 768px) {
      /* Additional responsive styles for smaller screens */
      body {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  
<?php
  session_start();
  $username = htmlspecialchars($_SESSION["username"]);
  $id = htmlspecialchars($_SESSION["id"]);
  //header("location: https://bluegr.cf/404.php");
?>
<?php include 'navbar.php'; ?>
  <center>
<h1>Games</h1>
<br><br>
    <h5><font color="white"><b>You can Upload a game from the <a href="/games/upload/index.php" type="button" class="btn btn-primary">Place Uploader</a> Page (You need Goodrooms Beta 2.0 or higher) </b></font></h5>
      <div class="card-group" style="width: 75%">
<?php
// Connect to the database and execute a SELECT query
$result = mysqli_query($link, 'SELECT * FROM games ORDER BY id DESC');


// Loop through the result set and display the data
while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $description = $row['description'];
    $image = $row['image'];
    $id = $row['id'];
    $created_by = $row['created_by'];
    // Echo the HTML for the card
    echo '<div class="card" style="width: 18rem;" id="'. htmlspecialchars($name) .'">';
    echo '<img src="' . htmlspecialchars($image) . '" class="card-img-top" alt="...">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-black">' . htmlspecialchars($name) . '</h5>';
    echo '<p class="card-text text-black">By: ' . htmlspecialchars($created_by) . '</p>';
   echo '<p class="card-text text-black">Game ID: ' . htmlspecialchars($id) . '</p>';
    echo '<a href="/games/view?id=' . htmlspecialchars($id) . '" class="btn btn-success">Play</a>';
    echo '</div>';
    echo '</div>';
}
?>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>