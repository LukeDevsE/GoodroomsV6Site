
<?php
$reason = ""; ?>
<html>
<head>
<title>GoodRooms Maintenance</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
<center>
<img src="/img/NewLogo.png">
<h1>We're Working in a <b>Better</b> Room</h1>
<p>GoodRooms is in maintenance, Please come back later<h6> <br><?php echo $reason ?></h6></p><br>
<a onClick='location.href = "https://goodrooms.xyz";' class="btn btn-primary" type="button">Retry</a>

