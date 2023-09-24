<div class="accordion" id="Chat">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
       <?php if(isset($_SESSION['loggedin'])){ echo 'Chat'; } else {}?>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
     <div class="accordion-body">
  
   <?php
session_start();
$chatmaintenance = false;
if($chatmaintenance == true){
echo 'Chat is in maintenance';
exit;
}
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
echo 'Please <a href="login">Login</a> to use the chat.';
} else {
    $query = "SELECT * FROM messages WHERE senderid = '". $id ."' OR recipentid = '". $id ."' ORDER BY timestamp";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
       
            echo "<h6>S<font color='black'>". $row['timestamp'] ."</font></h6>";
            echo "Sender ID: ". $row["senderid"] ."<br>";
            echo "" . htmlspecialchars($row["messagecontents"]) . "<br>";
        
            echo "<br>";
        }
    }else{
        echo "No messages found";
    }
echo '<form action="sendmessage" method="POST">
<input type="text" name="recipentname" placeholder="The Name of the User you want to send" class="form-control">
<input type="text" name="messagecontents" placeholder="Message" class="form-control">
<input type="submit" value="💬" class="btn btn-primary">
</form>';
echo '<a href="/delmsg.php" class="btn btn-danger" type="button">🗑</a>';
    mysqli_close($link);


}
 ?>

    
     </div>
      </div>
    </div>
  </div>