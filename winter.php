<?php
// GR Winter Mode
$wintermode = false;
if($wintermode == true) {
    echo '<style>
body{background:url("https://www.bluegr.cf/img/Winter_bkg.jpg") repeat-x #0168cd;}
.logo {
    background: url("https://www.bluegr.cf/img/grxmasred.png") no-repeat;
    background-size: cover;
    height: 35;
    width: 200;
}
.logo:hover {
    background: url("https://www.bluegr.cf/img/grxmasgreen.png") no-repeat;
    background-size: cover;
    height: 35;
    width: 200;
}

</style>
';
}
if($wintermode == false) {
    echo '<style>
    body{
background-color: rgb(30,30,30);
text-color: #ffffff;
color: #ffffff;
    }
p {
  color: #ffffff;
}
h1 {
  color: #ffffff;
}
h2 {
  color: #ffffff;
}
h3 {
  color: #ffffff;
}
h4 {
  color: #ffffff;
}
h6 {
  color: #ffffff;
}
label {
    color: #ffffff;
}
li {
    color: #ffffff;
}
card-text {
    color: black;
}
}';
} 
if($fallmode = true && $wintermode = false) {
    // Coming Soon... Fall Mode
} elseif ($fallmode = false && $wintermode = false){
// Summer Mode Coming Soon...
}
?>