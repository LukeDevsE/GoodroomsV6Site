<?php
include 'config.php';
include 'member.php';
$recipent = mysqli_real_escape_string($link, $_POST['recipentname']);
$sender =  $username;
$senderid = $id;
$result = mysqli_query($link, "SELECT id FROM users WHERE username = '$recipent'");
$row = mysqli_fetch_assoc($result);
$recipentid = $row['id'];
$message = $_POST['messagecontents'];
if($recipent == $sender){

    header("Location: " . $_SERVER["HTTP_REFERER"] . "#chat");
    exit;
}
$sendmessage = mysqli_query($link, "INSERT INTO `messages` (`senderid`, `recipentid`, `messagecontents`, `timestamp`) VALUES ('". $id ."', '". $recipentid ."', '". $message ."', CURRENT_TIMESTAMP) ");
if($sendmessage){
if(isset($_SERVER['HTTP_REFERER']))
{
    header("Location: " . $_SERVER["HTTP_REFERER"] ."#chat");
    exit;
} else
{
header("Location: https://bluegr.cf/home.php");
exit;
}
} else
{
echo '<p>Could not send Message</p><br>'. mysqli_error($link) .' An error ocurred and your Message could not be delivered';

}

?>