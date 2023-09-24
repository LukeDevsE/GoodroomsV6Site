<html>
<head>
<title>Card Redeemer - GoodRooms</title>
<?php include 'config.php';
include 'member.php'; ?>
</head>
<body>
<center>
<?php include 'navbar.php'; ?>
<h1>Redeem <img src="/img/NewLogo.png"> Gift Card</h1>
<p>This is still a beta
<?php
if(isset($_GET['redeemed'])){
if($_GET['redeemed'] == "1"){
echo '<div class="alert alert-success">
<p><font color="black">Succefully Redeemed Card</font></p></div>';

}
if($_GET['redeemed'] == "0"){
echo '<div class="alert alert-danger">
<p><font color="black">Invalid Card</font></p></div>';

}
}
?>
<form action="redeemcard" method="get">
<input type="text" name="code" class="form-control" placeholder="Example: GR-000000">
<input type="submit" class="btn btn-primary" value="Redeem">
</form>
</center>
<?php include 'footer.php'; ?>
</body>
</html>
