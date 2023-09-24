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
include '../../member.php';
$bio = $getuserinfo['bio'];
?>
<title><?= htmlspecialchars($getuserinfo['name']) ?> - GoodRooms</title>
</head>
<body>
<?php include '../../navbar.php'; ?>
<center>
<h1><?= htmlspecialchars($getuserinfo['name']) ?></h1><?php
  if ($getuserinfo['created_by'] == $username) {
    echo '  <a class="text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i></a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="../edit/?id='.$getuserinfo['id'].'">Edit</a></li>
    <li><a class="dropdown-item" href="../edit/download?id='.$userid.'" download="map.gr">Download</a></li>
  </ul>';
  }
?>
<hr>
<br>
<img width="420" height="230" src="<?php echo htmlspecialchars($image) ?>">
  
<hr>
<center>
  <p><?= htmlspecialchars($getuserinfo['description'], ENT_QUOTES, 'UTF-8'); ?></p>
<p><?php
?>
  <p>By: <?= htmlspecialchars($getuserinfo['created_by']) ?><br>
    <br>
<a onclick="openGoodRooms()" class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">&nbsp;&nbsp;&nbsp;&nbsp;Play&nbsp;&nbsp;&nbsp;&nbsp;</a>
<hr>
<p>Uploaded at: <?= htmlspecialchars($getuserinfo['created_at']) ?></p>
</center>
<?php include '../../footer.php'; ?>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Goodrooms</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-black">
        If you havent downloaded Goodrooms download it here! <a href="https://bluegr.cf/download">https://bluegr.cf/download</a>
      </div>
    </div>
  </div>
</div>
    <script>
function openGoodRooms() {
  window.open("goodrooms://<?= $getuserinfo['id']; ?>@<?= $username ?>");
  
}
</script>
</body>
</html>
<?php
  // mysqli_query($link, "UPDATE users SET lastactivity = ".time()." WHERE id = ".$id);
  // <a href="/report_abuse" class="btn btn-danger" type="button">Report Abuse</a>
?>