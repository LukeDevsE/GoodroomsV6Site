<html>
<head>
<title>User - GoodRooms</title>
<?php
$userid = $_GET['id'];
$user_id = $_GET['id'];
include 'config.php';
if (!isset($userid)) {
    die("An Error Ocurred");  
}
$file_pointer = 'img/Characters/'.$userid.'.png';
if (file_exists($file_pointer)) {
    $image = "$file_pointer";
} else {
    $image = "/img/BetterNewCharacter.png";
}

$stmt = mysqli_prepare($link, "SELECT * FROM users WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $userid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$getuserinfo = mysqli_fetch_assoc($result);

if ($getuserinfo['username'] == "") {
    header("location: 404.php");
}
include 'member.php';
function relativeTime($time, $short = false){
    $SECOND = 1;
    $MINUTE = 60 * $SECOND;
    $HOUR = 60 * $MINUTE;
    $DAY = 24 * $HOUR;
    $MONTH = 30 * $DAY;
    $before = time() - $time;

    if ($before < 0)
    {
        return "not yet";
    }

    if ($short){
        if ($before < 1 * $MINUTE)
        {
            return ($before <5) ? "just now" : $before . " ago";
        }

        if ($before < 2 * $MINUTE)
        {
            return "1m ago";
        }

        if ($before < 45 * $MINUTE)
        {
            return floor($before / 60) . "m ago";
        }

        if ($before < 90 * $MINUTE)
        {
            return "1h ago";
        }

        if ($before < 24 * $HOUR)
        {

            return floor($before / 60 / 60). "h ago";
        }

        if ($before < 48 * $HOUR)
        {
            return "1d ago";
        }

        if ($before < 30 * $DAY)
        {
            return floor($before / 60 / 60 / 24) . "d ago";
        }


        if ($before < 12 * $MONTH)
        {
            $months = floor($before / 60 / 60 / 24 / 30);
            return $months <= 1 ? "1mo ago" : $months . "mo ago";
        }
        else
        {
            $years = floor  ($before / 60 / 60 / 24 / 30 / 12);
            return $years <= 1 ? "1y ago" : $years."y ago";
        }
    }

    if ($before < 1 * $MINUTE)
    {
        return ($before <= 1) ? "just now" : $before . " seconds ago";
    }

    if ($before < 2 * $MINUTE)
    {
        return "a minute ago";
    }

    if ($before < 45 * $MINUTE)
    {
        return floor($before / 60) . " minutes ago";
    }

    if ($before < 90 * $MINUTE)
    {
        return "an hour ago";
    }

    if ($before < 24 * $HOUR)
    {

        return (floor($before / 60 / 60) == 1 ? 'about an hour' : floor($before / 60 / 60).' hours'). " ago";
    }

    if ($before < 48 * $HOUR)
    {
        return "yesterday";
    }

    if ($before < 30 * $DAY)
    {
        return floor($before / 60 / 60 / 24) . " days ago";
    }

    if ($before < 12 * $MONTH)
    {

        $months = floor($before / 60 / 60 / 24 / 30);
        return $months <= 1 ? "one month ago" : $months . " months ago";
    }
    else
    {
        $years = floor  ($before / 60 / 60 / 24 / 30 / 12);
        return $years <= 1 ? "one year ago" : $years." years ago";
    }

    return "$time";
 
}
  /*
if ($rawonlinedate != null) {
$lastonlinedate = relativeTime($rawonlinedate);
}else {
  $lastonlinedate = "User hasnt logged in since Old Times.";
}
  */
?>
</head>
<body>
<?php include 'navbar.php'; 
   if($getuserinfo['bio'] == "Content Deleted"){
  echo '<div class="alert alert-danger" id="BannedNotice">
   <center><p><font color="#664d03">This User Is Banned.</font></p></center>
   </div> ';
  }
    if ($getuserinfo["money"] == "") {
      $moneys = 0;
    }else {
      $moneys = $getuserinfo["money"];
    }
  ?>
<center>
<h1><?= $getuserinfo['username']; ?>'s profile</h1>
<p><?= $getuserinfo['status']; ?></p>
<hr>
<p><?= htmlspecialchars($getuserinfo['bio'], ENT_QUOTES, 'UTF-8'); ?></p>
  
<p><font color="green"><img src="/img/room buck.png" weight="16" height="16"> <?= $moneys ?><br></font></p>
<p><?php
include 'roles.php';
  if($getuserinfo['grplus'] == "true"){
    echo '&nbsp;<a href="/grplus"><img src="/img/GR+.png" weight="32" height="32"></a>';
      }
?></p>
<hr>
<img width="406" src="<?php echo $image ?>">
<hr>
<?php
$query = "SELECT * FROM friends WHERE ((user_id = ? AND friend_id = ?) OR (user_id = ? AND friend_id = ?)) AND (confirmed = 1 OR confirmed = 0)";
$stmt = $link->prepare($query);
$stmt->bind_param("iiii", $id, $userid, $userid, $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0 && $id != $userid) {
    // The viewer is not friends with the user, display the "Add Friend" button
    echo '<form action="addfriend.php" method="post">';
    echo '<input type="hidden" name="friend_id" value="' . $userid . '">';
    echo '<input type="hidden" name="user_id" value="' . $id . '">';
    echo '<input class="btn btn-primary" type="submit" value="Add Friend">';
    echo '</form>';
}
?>
  <?php if($getuserinfo['userid'] == $id){ echo 'This is your account!'; }
  else {echo '<a href="/report_abuse" class="btn btn-danger" type="button">Report Abuse</a>';}?>
  <!--
<div id="badges">
  <h1>GoodRooms Badges</h1>
  <p>Everyone can have only 3 Badges</p>
  <h6>Coming Soon...</h6>
  -->
<div id="extrainfo">
<font color="white">
 <a href="https://forum.bluegr.cf/member.php?action=profile&uid=<?php echo $forumid ?>"><?php echo $forumid ?></a>
<p>Account Creation: <?= $getuserinfo['created_at']; ?></p>
<!--<p>Last Online: <?= $lastonlinedate ?></p>-->
<p>Friends:</p>
<?php
$query = "SELECT * FROM friends WHERE (user_id = ? OR friend_id = ?) AND confirmed = 1";
$stmt = $link->prepare($query);
$stmt->bind_param("ii", $user_id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    
    // The user has friends, display their information
    while ($row = $result->fetch_assoc()) {
        
        // Get the ID of the friend
        $friend_id = $row['user_id'] == $user_id ? $row['friend_id'] : $row['user_id'];

        // Get the friend's information
        $query = "SELECT * FROM users WHERE id = ?";
    $stmt2 = $link->prepare($query);
    $stmt2->bind_param("i", $friend_id);
    $stmt2->execute();
    $friend_result = $stmt2->get_result();
        
        $user = $friend_result->fetch_assoc();

        // Check for the friend's profile picture
        $file_pointer = 'img/Characters/'.$friend_id.'.png';
        if (file_exists($file_pointer)) {
            $image = "$file_pointer";
        } else {
            $image = "/img/BetterNewCharacter.png";
        }

        // Display the friend's profile picture and name
        $username = $user['username'];
        echo "<img width='128' src='$image'>";
        echo "<br>";
        echo "<a class='text-white' href='/profile.php?id=$friend_id'>$username</a>";
        if ($id == $user_id) {
          // The viewer is the person, show the Unfriend button
          echo '<form action="unfriend.php" method="get">';
          echo '<input type="hidden" name="friend_id" value="' . $friend_id . '">';
          echo '<input class="btn btn-danger" type="submit" value="Unfriend">';
          echo '</form>';
        }
        echo "<br>";
    }
} else {
    // The user has no friends, display a message
    echo "This user has no friends.";
}
?>
<p>Inventory:</p>
  <?php

// Assuming you have already established a connection to the MySQL database and stored it in $link variable

// Get the user's ID from the request

// Retrieve the item IDs owned by the user from user_items table
$userItemsQuery = "SELECT item_id FROM user_items WHERE user_id = $userid";
$result = mysqli_query($link, $userItemsQuery);

// Loop through the user_items result set and fetch information from the catalog table
while ($row = mysqli_fetch_assoc($result)) {
    $item_id = $row['item_id'];

    // Retrieve the icon and name from the catalog table based on the item_id
    $catalogQuery = "SELECT id, Icon, name FROM catalog WHERE id = $item_id";
    $catalogResult = mysqli_query($link, $catalogQuery);
    $catalogRow = mysqli_fetch_assoc($catalogResult);

    $id = $catalogRow['id'];
    $icon = $catalogRow['Icon'];
    $name = $catalogRow['name'];

    // Generate the HTML card element for each item owned
    echo '<div class="card" style="width: 18rem;">
              <a href="/catalog/view?id=' . $id . '">
                <img src="' . $icon . '" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title text-black">' . $name . '</h5>
              </div>
          </div>';
}
?>

</center>
</font>
</div>

<?php include 'footer.php'; ?>
</body>
  </html>