<?php
   include 'member.php';
   $delete = "img/Characters/".$id.".png";
   unlink($delete);
   header("Location: https://bluegr.cf");
?>