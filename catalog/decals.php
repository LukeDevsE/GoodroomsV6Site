<?php include '../member.php'; ?>
<html>
  <head>
    <title>Catalog/Decals - GoodRooms</title>
    <?php include '../config.php'; ?>
    </head>
  <body>
    <?php include '../navbar.php'; ?>
    <center>
     <a href="/catalog/" type="button" class="btn btn-secundary"><font color="white">Catalog</a><a href="/catalog/decals" class="btn btn-primary" type="button" >Decals</font></a>
     <hr>
      <h1>Welcome to the Decals Page!</h1>
      <!--<p>The Decals are images you can use in your Places. just download it. then use them in your Places</p>-->
     <a href="/devhub" class="btn btn-primary" type="button"><i class="bi bi-tools"></i> Decal Uploading is now on DevHub</a>
    <?php
  // <a href="/report_abuse" class="btn btn-danger">Report Abuse (Beta)</a> (this will be added when the report feature is done)
     $folder = '../img/Decals';

$files = scandir($folder);

foreach ($files as $file) {
    if ($file != '.' && $file != '..' && file_exists($folder . '/' . $file)) {
        $pathinfo = pathinfo($file);
        $filename = basename($file, '.' . $pathinfo['extension']);
        $card = '<div class="card" style="width: 18rem;" id="%filename% background-color: #36393e;">';
        $card .= '<img src="../img/Decals/%filename%.%fileextension%" class="card-img-top" alt="%filename%" width="250" height="250">';
        $card .= '<div class="card-body">';
        $card .= '<h5 class="card-title" style="color: #36393e;">%filename%</h5>';
        $card .= '<a download="%filename%.%fileextension%" href="../img/Decals/%filename%.%fileextension%" class="btn btn-primary">Download</a>&nbsp;<a href="/report_abuse" class="btn btn-danger" type="button">Report Abuse</a>';
        $card .= '</div>';
        $card .= '</div>';
        $card .= '<br>';
        $card = str_replace('%filename%', $filename, $card);
        $card = str_replace('%fileextension%', $pathinfo['extension'], $card);
        echo $card;
    }
}
?>
      
    </center>
    <?php include '../footer.php'; ?>
    </html>