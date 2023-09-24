<?php
  /*
include 'config.php';
include 'member.php';
include 'navbar.php';
echo '<title>Feed - GoodRooms</title>';
echo '<center>';
if($_POST['post'] == true){
 $doquery = mysqli_query($link, "INSERT INTO `feed` (`contents`, `username`, `timestamp`) VALUES ( '". $_POST['contents'] ."', '". $username ."', CURRENT_TIMESTAMP) ");
     if($doquery){

         echo '<p>Sucefully Uploaded to Feed</p>';
     } else {

         echo '<p>Unable to Upload to Feed </p>';
     }
}
*/
?>
<!--
<form  action="" method="post">
<p style="text-color: black;">Want to upload to the Feed?</p>
<input type="text" class="form-control" name="contents" placeholder="What to Upload?">
<input type="submit" class="btn btn-primary" value="Submit to the Feed" name="post" value="true">
</form>
<style>
  .dark{
  color: #36393e;
  }
  </style>
<?php
   $query = "SELECT * FROM feed ORDER BY timestamp DESC";

    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">';
            echo '';
            echo '<p class="dark">'. htmlspecialchars($row["username"]) . ' Says...</p><br>';
           echo "<p class='dark'>" . htmlspecialchars($row["contents"]) . "</p><br>";
            echo "<p class='dark'>At " . htmlspecialchars($row["timestamp"]) . "</p><br>";
            echo "<br>";
            echo "";
            echo '</div>';
        }
    }else{
        echo "<p>The GoodRooms Feed is empty</p>";
    }
?>
<?php 
echo '</center>';
include 'footer.php';
?>-->
<?php
  header("Location: home.php")
  ?>
