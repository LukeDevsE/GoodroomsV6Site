<?php include 'member.php'; ?>
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
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
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
  $image;
$file_pointer = 'img/Characters/'.$id.'.png';
        if (file_exists($file_pointer)) {
            $image = "$file_pointer";
        }else {
          $image = "/img/Character.png";
        }
?>
<html>
<head>
<title>Wardrobe  - GoodRooms</title>
<?php include 'config.php'; ?>
</head>
<body>
<?php include 'navbar.php'; ?>
<?php include 'member.php'; ?>
<div id="launcher">
<h3>Welcome to the Wardrobe</h3>
<p></p>
<p>Max Size 2MB Must be .PNG</p>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
<?php
  $delete = "img/Characters/".$id.".png";
  if (file_exists($delete)) {
     echo '
      <a href="deleteavatar.php" class="btn btn-danger" type="button">Remove Avatar</a>
     ';
  };
?>
  <h3>Current Avatar</h3>
 <a href="/profile?id=<?php echo $id ?>"><img width="406" height="406" src="<?php echo $image ?>"></a>
</div>
<?php include 'footer.php'; ?>
</body>
</html>