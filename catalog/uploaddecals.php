<?php
include 'config.php';
include 'member.php';
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("png");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="The Image must be PNG.";
      }
      if($file_size > 2097152){
         $errors[]='File Size limit is 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../img/Decals/".$file_name);
      }else{
         print_r($errors);
      }
   }
   header("Location: index.php");
?>