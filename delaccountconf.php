<?php include 'member.php'; ?>
<html>
<head>
<title>Delete your Account  - GoodRooms</title>
<?php include 'config.php'; ?>
</head>
<body> <div class="modal modal-sheet position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSheet">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5" style="color: red;">LAST WARNING</h1>
      
      </div>
      <div class="modal-body py-0">
        <p style="color: black">When you delete your account, This Stuff will be deleted</p>
        <li style="color: black">Your RoomBux and XIT</li>
        <li style="color: black;">Your GoodRooms Friends</li>
         <li style="color: black">Your Role</li>
        <p><font color ="red">Note: Your Profile Picture will not be deleted from the server and will be used by the next user that gets your same id, <br>
          He can delete the Picture Anytime
      </div>
    
      <div class="modal-footer flex-column border-top-0">
      <form action="delaccount" method="post">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <a href="/settings" type="button" class="btn btn-success">Return to settings</a>
      </div>
    </div>
  </div>
          </div>
</body>
</html>

