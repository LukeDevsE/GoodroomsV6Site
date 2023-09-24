<html>
  <head>
    <?php include 'config.php'; ?>
    <title>Users - GoodRooms</title>
      </head>
  <body>
    <?php include 'navbar.php'; ?>
    <br><br>
    <center>
      <h3>User List</h3>
    <div id="list">
      <?php
      $result = mysqli_query($link, "SELECT * FROM users");

while($row = mysqli_fetch_array($result)) {
  $file_pointer = 'img/Characters/'.$row['id'].'.png';
        if (file_exists($file_pointer)) {
            $image = "$file_pointer";
        }else {
          $image = "/img/NewCharacter.png";
        }
  echo "<div class='card' style='width: 18rem;'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title text-black'>" . $row['username'] . "</h5>";
  echo "<p class='card-text'><img src=".  $image." width='128' height='128'></p>";
  echo "<a href='/profile?id=". $row['id'] ."' class='btn btn-primary'>Profile</a>";
  echo "<a href='/report_abuse' class='btn btn-danger' type='button'>Report Abuse</a>";
  echo "</div>";
  echo "</div>";
  echo "<hr>";
} ?>
      </div>
    </center>
    <?php include 'footer.php'; ?>
    </body>
  </html>
