<?php include '../../member.php'; ?>
<html>
<head>
<title>Upload Games - GoodRooms</title>
<?php include '../../config.php'; ?>
</head>
<body>
<?php include '../../navbar.php'; ?>
<?php
if ($bio == "Content Deleted"){
  header("Location: https://goodrooms.xyz/banned");
}
?>
<center>
<h3>Upload a Game</h3>
<p>This will be seen and downloadable on the GoodRooms Site </p>
<a class="btn btn-primary" href="https://goodrooms.xyz/devhub" role="button">Upload Images Here</a>
<p>Right Click on your image, then open in new tab, then copy the link and paste it into Image below</p>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
         <p>Image</p>
         <input type="text" name="image" />
         <p>Name</p>
         <input type="text" name="name"/>
         <p>Description</p>
         <input type="text" name="description"/>
         <p>Download</p>
         <font color="white"><input type="file" name="download"/></font>
         <input type="submit"/>
      </form>
<?php include '../../footer.php'; ?>
</body>
</html>