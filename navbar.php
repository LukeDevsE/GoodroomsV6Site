
<header class="p-3 text-bg-dark">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="logo" src="https://goodrooms.xyz/img/NewerLogo.png" width="200" height="35">
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white"><i class="bi bi-house-door-fill"></i> Home</a></li>
          <li><a href="/game" class="nav-link px-2 text-white"><i class="bi bi-controller"></i> Games</a></li>
          <li><a href="/catalog" class="nav-link px-2 text-white"><i class="bi bi-cart-fill"></i> Catalog</a></li>
         <!--<li><a href="https://status.bluegr.cf" class="nav-link px-2 text-white"><i class="bi bi-hdd-fill"></i> Status</a></li>-->
          <!--<li><a href="/socialmedia" class="nav-link px-2 text-white"><i class="bi bi-chat-left-dots"></i> Social</a></li> -->
       
       <?php
       
if($_SESSION['loggedin'] == true){
include 'member.php';

$gufq = mysqli_query($link, "SELECT * FROM users WHERE id='$id'") or die(mysqli_error($link));
  $getuserinfoes= mysqli_fetch_assoc($gufq);
  if ($getuserinfoes["money"] == "") {
      $moneys = 0;
    }else {
      $moneys = $getuserinfoes["money"];
    }

    echo '
             <li><a class="nav-link px-2 text-white" href="/devhub"><i class="bi bi-hammer"></i> Create</a></font></li>
            <li><a class="nav-link px-2 text-white" href="/download"><i class="bi bi-download"></i> Download</a></font></li>
            <!--<li><a href="/events" class="nav-link px-2 text-white"><i class="bi bi-calendar-event"></i> Events</a></li>-->
            
           <!--<li><a class="nav-link px-2 text-white" href="/usersearch"><i class="bi bi-search"></i> Search</a></font></li>-->
          <!--<li><font class="logout" color="white"> <p>Hey, <a class="username text-white" a href="/profile?id='.$id.'">'. $username .'</a>! <font color="white"><a class="text-white bi bi-person-dash-fill" href="/logout"></a></font'.' </p></font></li>-->
           <!--<li><a class="nav-link px-2 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" a><i class="bi bi-gear-fill"></i></a></li>-->
      
      &nbsp;&nbsp;&nbsp;
        <form class="d-flex" role="search" action="search.php" method="post">
        <input class="form-control me-2" id="username" name="username" type="search" placeholder="User Search" aria-label="Search">
      </form>
      &nbsp;&nbsp;
      <li><a class="nav-link px-2 text-white"><img src="/img/room buck.png" weight="16" height="16"> '.$moneys.'</a></li>
            <div class="dropdown">
  <a class="nav-link px-2 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-gear-fill"></i></a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/profile?id='.$id.'">Profile</a></li>
    <li><a class="dropdown-item" href="/settings">Settings</a></li>
    <li><a class="dropdown-item" href="/logout">Logout</a></li>
  </ul>
</div>
<!-- <li class="nav-item"> -->
<!-- <a class="nav-link" href="/download-charfiles">Charfiles Hub</a> -->
<!-- </li> -->   
';
mysqli_query($link, "UPDATE users SET lastactivity = ".time()." WHERE id = ".$id);
}
?>
                 
        </ul>

        
      </div>
    </div>
  </header>
  <?php
    
    $f_contents = file(dirname(__FILE__)."/splashes.txt");
    $line = $f_contents[rand(0, count($f_contents) - 1)];
?>
</font>
<div class="alert alert-warning">
<p><font color="#664d03"><?php echo $line ?></font></p>
</div>
  <?php include 'winter.php'; ?>
<style>
  .username {
    text-decoration: none;
  }
  .username:hover {
    text-decoration: underline;
  }
</style>