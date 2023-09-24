<?php
include 'config.php';
include 'member.php';
include 'navbar.php';
?>
<title>Give RoomBux - GoodRooms</title>
<center><form action="give" method="POST">
<input type="text" name="roombuxtogive" placeholder="How many roombux you want to give?" class="form-control">
<input type="text" name="useridtogive" placeholder="Type the user id who will receive the Roombux" class="form-control">
<input type="submit" value="Send RoomBux" class="btn btn-primary">
</form></center>
<?php include 'footer.php';?>