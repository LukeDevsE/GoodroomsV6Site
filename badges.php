 <?php if($getuserinfo['badge1'] == "Veteran"){
echo '<span class="badge rounded-pill bg-primary"><abbr title="The User has been for 1 Year in GoodRooms. or has been in Older Versions">Veteran</abbr></span>';
}
if($getuserinfo['badge1'] == "Builder"){
echo '<span class="badge rounded-pill bg-primary"><abbr title="This user has made more than 10 Games">Builder</abbr></span>';}
  if($getuserinfo['badge1'] == "DeclKng")
    {echo '<span class="badge rounded-pill bg-primary"><abbr title="This user has uploaded more than 100 Decals">Decal King</abbr></span>
    ';}
  if($getuserinfo['badge1'] == null){
  echo '<span class="badge rounded-pill bg-primary">None</span>';
  }
 if($getuserinfo['badge2'] == "Admin"){
echo '<span class="badge rounded-pill bg-secondary"><abbr title="This user works for GoodRooms. Everyone claiming to be a Administrator. but does not have this badge. must be reported">Administrator</abbr></span>';
}
if($getuserinfo['badge2'] == "Mod"){
echo '<span class="badge rounded-pill bg-secundary"><abbr title="This user moderates GoodRooms">Moderator</abbr></span>';
  if($getuserinfo['badge2'] == null){
  echo '<span class="badge rounded-pill bg-secundary"><abbr title="This user is a Registered member of GoodRooms">GoodRoomian</abbr></span>';
  }
  ?>