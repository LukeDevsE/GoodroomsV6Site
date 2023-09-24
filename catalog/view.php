<html>
<head>
<?php
$userid = $_GET['id'];
include '../config.php';
if (!isset($userid)) {
    die("An Error Ocurred");  
}
$file_pointer = 'img/Characters/'.$userid.'.png';
        if (file_exists($file_pointer)) {
            $image = "$file_pointer";
        }else {
          $image = "/img/Character.png";
        }

$gufq = mysqli_query($link, "SELECT * FROM catalog WHERE id='$userid'") or die(mysqli_error($link));
  $getuserinfo = mysqli_fetch_assoc($gufq);
$sqlquery = "SELECT * FROM games WHERE id='$userid'";
$image = "https://bluegr.cf/img/Games/".$userid.".png";
include '../member.php';
if ($bio == "Content Deleted"){
  header("Location: https://bluegr.cf/banned");
}
?>
<title><?= $getuserinfo['name']; ?> - GoodRooms</title>
</head>
<body>
<?php include '../navbar.php'; ?>
<center>
   <a href="/catalog/" class="btn btn-primary" type="button" >Catalog</a><a href="/catalog/decals" type="button" class="btn btn-secundary"><font color="white">Decals</font></a>
  <br>
<img src="<?php echo $getuserinfo['Icon']; ?>"height="250px">
<h4><?= $getuserinfo['name']; ?></h4>
<p><?= $getuserinfo['description']; ?></p>
 <p>Obtain it at <?php if( $getuserinfo['Currency'] == "GR$" ){echo '<img src="/img/room buck.png" weight="16" height="16">';}?><?= $getuserinfo['Price']; ?>
<!-- <button type="button" class="btn btn-success" name="Buy" disabled>Buy (<?= $getuserinfo['Price']; ?> <?= $getuserinfo['Currency']; ?>)</button> -->
      <form action="purchase.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="item_id" value="<?php echo $userid; ?>">
         <input type="submit" name="buy" value="Buy"/>&nbsp;<a href="/report_abuse" class="btn btn-danger" type="button">Report Abuse</a> <!-- Buy (<?= $getuserinfo['Price']; ?> <?= $getuserinfo['Currency']; ?>) -->
      </form>
<p>Uploaded at: <?= $getuserinfo['created_at']; ?></p>
</center>
<?php include '../footer.php'; ?>
</body>
</html>
<?php
  // mysqli_query($link, "UPDATE users SET lastactivity = ".time()." WHERE id = ".$id);
?>
<style>
input[type=submit] {
    border-radius: 8px;
    background-color: #198754;
    border: none;
    padding: 8px 16px;
    color: white;
}
</style>