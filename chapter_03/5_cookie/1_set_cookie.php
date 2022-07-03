<?php 
// setcookie 
// setting a cookie 
setcookie("name","value",time()+3600);
// setting a cookie with a expiration time
setcookie("name","value",time()+3600,"/",".example.com");
// setting a cookie with a expiration time and a path
setcookie("name","value",time()+3600,"/",".example.com",true);
echo "Cookie Set Successfully";