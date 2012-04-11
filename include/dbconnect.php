<?php
$username="rosh";
$password="pppppp";
$database="blogs";



mysql_connect("localhost",$username,$password);
$connect=@mysql_select_db($database) or die( "Unable to Connect. Try Again");
?>