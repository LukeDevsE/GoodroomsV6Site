<?php
    include 'member.php';
  include 'config.php';
  include 'navbar.php';
 // $query = 'INSERT INTO reports (user_id, report_type, report_details) VALUES ($id, "$_GET["report_type"];", "$_GET["report_details"];" ?)';
//$reportdetails = $_GET["report_details"];
 // $reporttype = $_GET["report_type"];
//$stmt = $link->prepare($query);
//$stmt->bind_param($user_id, "$reporttype", "$reportdetails" );
//$stmt->execute();
  $report_type = $_GET['report_type'];
  $report_details = $_GET['report_details'];
          $sqlquery = "INSERT INTO reports (user_id, report_type, report_details) VALUES ('$id', '$report_type', '$report_details')";
          if (mysqli_query($link, $sqlquery)) {
            echo '<center><h1>Your Report will be viewed by moderators, Thanks!</h1>';
          } else {
              echo "ERROR: " . mysqli_error($link);
       }  
  include 'footer.php';
 ?>