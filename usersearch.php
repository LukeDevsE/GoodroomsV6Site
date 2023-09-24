<html>
<head>
<title>Search  - GoodRooms</title>
<?php include 'config.php'; 
  ?>
</head>
<body>
<?php include 'navbar.php'; ?>
<center>
  <div id="user-search">
<h1>User Search</h1>
<p>Put the Username of the user you want to search</p>
<form action="search.php" method="post">
<input class="form-control" type="text" id="username" name="username">
<input class="btn btn-primary" type="submit" value="Search">
  </form>
    <a href="/userlist" class="btn btn-primary" type="button">User List</a>
  </div>
  <div id="decal-search">
  <h4>Decal Search</h4>
  <p>You can also search a decal. just put the name</p>
  <form method="get" action="/decalsearch">
    <input type="text" class="form-control" name="decal" placeholder="Decal">
    <input type="submit" value="Go" class="btn btn-primary">
    </form>
    </div>
  <hr>
</center>
<?php include 'footer.php'; ?>
</body>
</html>