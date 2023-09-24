<?php
  include 'member.php';
  ?>
<html>
  <head>
    <title>Report Abuse - GoodRooms</title>
    <?php include 'config.php'; ?>
  </head>
  <body>
    <?php include 'navbar.php'; ?>
    <center>
<h1>Report Abuse</h1>
      <p>Warning: False Reports may result in a Temporally Ban</p>
      <form method="get" id="report" action="/uploadreport">
        <input type="text" id="report_type" name="report_type" placeholder="Why you're reporting? Example: User">
       <input type="text" id="report_details" name="report_details" placeholder="Give us more information about your Report">
        <input type="submit" class="btn btn-danger" id="submit" value="Submit">
        </form>