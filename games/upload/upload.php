<?php
  include '../../config.php';
  include '../../member.php';
  $image = $_POST['image'];
  $name = $_POST['name'];
  $description = $_POST['description'];
   if(isset($_FILES['download'])){
      $errors= array();
      $file_name = $_FILES['download']['name'];
      $file_size =$_FILES['download']['size'];
      $file_tmp =$_FILES['download']['tmp_name'];
      $file_type=$_FILES['download']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['download']['name'])));
      
      $extensions= array("gr");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="Use a gr file";
      }
      
      if(empty($errors)==true){
         $downloadpage = file_get_contents($file_tmp);
         
         $gufq = mysqli_query($link, "INSERT INTO games (name, description, download, created_by, image) VALUES ('$name', '$description', '$downloadpage', '$username', '$image')") or die(mysqli_error($link));
         // $getuserinfo = mysqli_fetch_assoc($gufq);
         // $sqlquery = "INSERT INTO games (name, description, download) VALUES ('John', 'Doe', 'john@example.com')";
         header("Location: https://goodrooms.xyz/game");
         exit;
      }else{
         print_r($errors);
      }
   }
?>