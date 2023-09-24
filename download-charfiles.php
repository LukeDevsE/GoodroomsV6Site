<?php
header("Location: home");
exit();
?>
<?php include 'member.php'; ?>
<html>
<head>
<title>Download Character Files  - GoodRooms</title>
<?php include 'config.php'; ?>
</head>
<body>
<?php include 'navbar.php'; ?>
<center>
<h1>Download Character Files</h1>
<p>These files are uploaded by the community, if you want to upload one, go to #upload-net Channel in our Discord</p>
<hr>
<h1>There are no Character Files there</h1>
<a href="/download" class="btn btn-primary" type="button">Return to Download Hub</a>
</center>
<?php include 'footer.php'; ?>
</body>
</html>