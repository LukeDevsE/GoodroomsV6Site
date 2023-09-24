<?php
include'config.php';
include'navbar.php';
include'member.php';
echo '<title>Messages - GoodRooms</title><center>';
$query = "SELECT * FROM grmsg WHERE recipntusr = '$username' OR recipntusr = 'Everyone' ORDER BY created_at DESC";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<h6><img src="/img/GRIcon.png" width="64" height="64"> GoodRooms - <span class="badge bg-light"><font color="black">'. $row['created_at'] .'</font></span><h6><br>';
    echo '<h4> '. htmlspecialchars($row['title']) .'<h6><br>';
    echo '<p>'. htmlspecialchars($row['contents']) .'</p>';
    echo '<hr>';
}
echo '</center>';
include 'footer.php';
?>
