<?php
session_start();

$_SESSION["user"] = "Rakib";
echo "Session set!"."<br>";

setcookie("username","Sakib",time() + 3600);


echo "Name: ". $_COOKIE["username"]."<br>";
?>