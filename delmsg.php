<?php
include 'member.php';
include 'config.php';
$action = "DELETE FROM `messages` WHERE `messages`.`senderid` = $id";
$doaction = mysqli_query($link, $action);
if($doaction){
echo 'Messages Sucefully Removed';

} else
echo 'Could not Remove your Messages:'. mysqli_error($link);


?>