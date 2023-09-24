<?php
  // GRCore Roles System
  // Note: This Will Not work if the page has not included config.php(The Core)
if($getuserinfo['role'] == "Owner") {
    echo "GoodRooms Owner";
}
if($getuserinfo['role'] == "Staff") {
    echo "GoodRooms Staff Member";
}
if($getuserinfo['role'] == "Mod") {
    echo "GoodRooms Moderator";
}
if($getuserinfo['role'] == "IronBlox") {
    echo "Member Since IronBlox";
}
if($getuserinfo['role'] == "NB") {
    echo "Member Since Nox Blocks";
}
if($getuserinfo['role'] == "EBLOX") {
    echo "Member Since EPICBLOX";
}
if($getuserinfo['role'] == "OG") {
    echo "Member Since ROBLOXERUS (Real OG)";
}
if($getuserinfo['role'] == "IB") {
    echo "Member Since InovateBrick";
}
if($getuserinfo['role'] == "1-3") {
    echo "Member Since GR v1 or GR v2 or GR v3";
}
if($getuserinfo['role'] == "4") {
echo "GoodRooms 4 vs 5";  
}
if($getuserinfo['role'] == "BRCKM") {
    echo "Member Since Brickium";
}
if($getuserinfo['role'] == "GR") {
    echo "GoodRooms Official";
}
if($getuserinfo['role'] == "FORMOD") {
    echo "Forum/Wiki Moderator";
}
if($getuserinfo['role'] == "TRUS") {
    echo "Trusted GoodRooms Member";
}
  if($getuserinfo['role'] == "OGOwn") {
    echo "GoodRooms OG Owner ";
    }
      if($getuserinfo['role'] == "Friends") {
    echo "Friends with the owner (Luke)";
}
  if($getuserinfo['role'] == "Friends2") {
    echo "Friends with the owner (Luke) and OG Owner (PressTpro)";
}    
  if($getuserinfo['role'] == "FriendsOG") {
    echo "Friends with the OG Owner (PressTpro)";
}
  if($getuserinfo['role'] == "Certified") {
    echo "Certified GoodRoomian™";
}   
?>