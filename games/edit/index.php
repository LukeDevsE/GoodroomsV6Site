<html>
<head>
<?php
$userid = $_GET['id'];
include '../../config.php';
if (!isset($userid)) {
    die("An Error Ocurred");  
}

$gufq = mysqli_query($link, "SELECT * FROM games WHERE id='$userid'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
$sqlquery = "SELECT * FROM games WHERE id='$userid'";
$image = $getuserinfo['image'];
  $owner = $getuserinfo['created_by'];
  $user = $getuserinfo['name'];
  $desc = $getuserinfo['description'];
include '../../member.php';
$bio = $getuserinfo['bio'];
if ($bio == "Content Deleted"){
  header("Location: https://bluegr.cf/banned");
}
?>
  <?php include '../../navbar.php'; ?>
  <center>
      <form action="edit.php" method="POST" enctype="multipart/form-data">
         <p>Image</p>
         <input type="text" name="image" value="<?php echo $image ?>" />
         <p>Name</p>
         <input type="text" name="name" value="<?php echo $user ?>"/>
         <p>Description</p>
         <input type="text" name="description" value="<?php echo $desc ?>"/>
         <p>Download</p>
         <input type="hidden" name="id" value="<?php echo $userid ?>">
         <font color="white"><input type="file" name="download"/></font>
        <br>
        <br>
        <input class="btn btn-success" type="submit"/>
      </form>
<?php include '../../footer.php'; ?>