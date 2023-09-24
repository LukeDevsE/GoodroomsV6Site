<html>
<head>
<title>Games - GoodRooms</title>
<?php include 'config.php'; ?>
</head>
<body>
<?php include 'navbar.php'; ?>
<center>
<h1>Games</h1>
<br><br>
<!-- <h3><font color="gray"><b>Try Pinging some Staff Members in our Discord to upload a game</b></font></h3> -->
<center>
<p>Login or Register to Download the Games</p>
<div class="card-container">
  <div class="card" style="width: 18rem;">
    <img src="/img/Games/1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">2010 Starter Place</h5>
      <font color="black"><p class="card-text">Your own private place to chill and drive vehicles!</p></font>
    </div>
  </div><div class="card" style="width: 18rem; ">
       <img src="/img/Games/2.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Rocket Arena</h5>
      <font color="white">  <p class="card-text">rockets, jetboots, and blowing up bridges. Out-maneuver your foes using your jetboots, cut off their escape by nuking the bridges, and rain doom down upon them using a rapid-fire rocket launcher. But don't fall in the lava - ouch!</p></font>
    </div>
</div>
</div>
</div>
  <div id="GameLoadingGuide">
<h3>How to load the Game</h3>
<h5>With a RBXL file</h5>
<p>Open GoodRoomsApp.exe, then Click on File, Select Open, then Select the RBXL File you want to load on the client (Example: Place1.rbxl), Once map is load on the Client, Click the Play Button, then in the Bottom bar, Type "game.Players:CreateLocalPlayer(0)" (without the quotes) click ENTER on your Keyboard, then type "game.Players.LocalPlayer:LoadCharacter()", After that, you're done!
<h5>Without a RBXL file</h5>
<p>Open GoodRoomsApp.exe, then Build the Map, After that, Click the Play Button, on the bottom bar type "game.Players:CreateLocalPlayer(0)" (without the quotes) click ENTER on your Keyboard, then type "game.Players.LocalPlayer:LoadCharacter()", after that, you're done!
<h2>Happy Building!</h2>
</div>
<!-- <div id="Games">
<img width="384" height="216" src="/img/Games/1.png">
<h4>2010 Starter Place</h4>
<p>Your own private place to chill and drive vehicles!</p>
<a href="/games/2010starterplace.rbxl" class="btn btn-success" type="button">Play</a>
<hr>
<img width="384" height="216" src="/img/Games/2.png">
<h4>Rocket Arena</h4>
<p>rockets, jetboots, and blowing up bridges. Out-maneuver your foes using your jetboots, </p>
<p>cut off their escape by nuking the bridges, and rain doom down upon them using a rapid-fire rocket launcher. But don't fall in the lava - ouch!</p>
<p>Designed for 2008</p>
<a href="/games/Rocket Arena 2008.rbxl" class="btn btn-success" type="button">Play</a>
</div>
-->
<?php include 'footer.php'; ?>
</body>
</html>