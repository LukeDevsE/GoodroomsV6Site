<?php include 'member.php'; ?>
<?php include 'config.php';
include 'navbar.php';  ?>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("png");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a PNG file.";
      }
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"img/Characters/".$file_name);
         rename("img/Characters/".$file_name, "img/Characters/".$id.".png");
      }else{
         print_r($errors);
      }
   }
  $gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
  $sqlquery = "SELECT * FROM users WHERE id='$id'";
?>
<html>
<head>
<title> GoodRooms Settings</title>
</head>
<body>
<center>
<h1>Welcome to GoodRooms Settings</h1>
  <hr>
  <div id="change-password">
    <a href="/change-password" class="btn btn-primary" type="button">Change Password</a>
    </div>
  <div id="launcher">
<h3>Upload a Profile Image</h3>
<p>This will be seen in the GoodRooms Site, To change your Wiki/Forum Image, change it from the Wiki/Forum
<p>Max Size 2MB Must be .PNG</p>
      <form action="" method="POST" enctype="multipart/form-data">
         <font color="white"><input type="file" name="image" /></font>
         <input type="submit" value="Submit" class="btn btn-success"/>
      </form>
<?php
  $delete = "img/Characters/".$id.".png";
  if (file_exists($delete)) {
     echo '
     <p>To change your Image you must Delete the current one and upload a new one</p>
      <a href="deleteavatar.php" class="btn btn-danger" type="button">Delete Profile Image</a>
     ';
  };
?>
</div>
<hr>
  <div id="changebio">
<h3>Change Bio</h3>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="text" class="form-control" name="biotext" placeholder="New Bio" />
         <input type="submit" class="btn btn-success" value="Update Bio" name="submitbio"/>
      </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       if (isset($_POST['submitbio']) && !empty($_POST['biotext']) && $_POST['biotext'] != "Content Deleted") {
          $bio = $_POST['biotext'];
          $sqlquery = "UPDATE users SET bio='$bio' WHERE id=$id";
          if (mysqli_query($link, $sqlquery)) {
             echo "Bio Updated";
          } else {
              echo "BIO ERROR: " . mysqli_error($link);
       }  
    }
   }
?>
  </div>
  <hr>
  <div id="changebio">
<h3>Change Username (100 <img src="/img/Roombux3D.png" weight="64" height="64">)</h3>
      <form action="changeusr" method="GET" enctype="multipart/form-data">
         <input type="text" placeholder="New Username" class="form-control "name="newusr" />
         <input type="submit" class="btn btn-success" value="Change Username" name="submitusr"/>
      </form>
  </div>
  <hr>
  <div id="status">
  <form action="statusupdate" method="post">
  <input placeholder="What will your Status Be?" class="form-control" name="status" type="text"><input type="submit" class="btn btn-primary" value="Change Status">
  </form>
  </div>
<hr>
  <h1>Friend Requests</h1>
  <?php
  
// Get all friend requests sent to the viewer
$query = "SELECT * FROM friends WHERE friend_id = ? AND confirmed = 0";
$stmt = $link->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result_friend_requests = $stmt->get_result();

if ($result_friend_requests->num_rows > 0) {
    // The viewer has received friend requests, display them
    while ($row = $result_friend_requests->fetch_assoc()) {
        // Get the ID of the sender
        $sender_id = $row['user_id'];

        // Get the sender's information
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $link->prepare($query);
        $stmt->bind_param("i", $sender_id);
        $stmt->execute();
        $result_sender_info = $stmt->get_result();

        $sender = $result_sender_info->fetch_assoc();

        // Check for the sender's profile picture
        $file_pointer = 'img/Characters/'.$sender_id.'.png';
        if (file_exists($file_pointer)) {
            $image = "$file_pointer";
        } else {
            $image = "/img/Character.png";
        }

        // Display the sender's profile picture and name
        $username = $sender['username'];
        echo "<img width='128' height='128' src='$image'>";
        echo "<br>";
        echo "<a class='text-white' href='https://www.bluegr.cf/profile.php?id=$sender_id'>$username</a>";
        echo "<br>";

        // Display the accept/reject form
        echo '<form action="acceptreject.php" method="post">';
        echo '<input type="hidden" name="sender_id" value="' . $sender_id . '">';
        echo '<input type="hidden" name="viewer_id" value="' . $id . '">';
        echo '<input class="btn btn-primary" type="submit" name="accept" value="Accept">';
        echo '<input class="btn btn-secondary" type="submit" name="reject" value="Reject">';
        echo '</form>';
    }
} else {
    // The viewer has no received friend requests
    echo "<p class='text-white'>You dont have any friend request.</p>";
}

?>
<div id="account-deletion">
<h1> Account Deletion</h1>
<p>Here you can Delete Your Account</p>
<br>
<h3><font color="red">WARNING</font></h3>
<br>
<p>When you delete your account, you'll lose</p>
<li class="text-white">Your RoomBux</li>
<li class="text-white">Your Places</li>
<li class="text-white">Your Catalog Assets</li>
<li class="text-white">Your Rank</li>
<li class="text-white">Your Friends</li>
<br>
<P>Think about Deleting Your Account 2 Times, then Delete it (or not)</p><br>
<a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete Account</a>
<?php
  mysqli_query($link, "UPDATE users SET lastactivity = ".time()." WHERE id = ".$id);
?>
<?php include 'footer.php'; ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Delete Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-black">
        This will PERMANENTLY delete your account. Are you sure you want to delete your account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="delaccountconf.php" class="btn btn-danger" type="button">Yes I'm sure</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>