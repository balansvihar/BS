<?php

if($_GET['user']=="balan")
{
	include("config.php");
	include("database.php");
	echo "Host : ".DB_HOST."<br>";
	echo "Data Base : ".DB_NAME."<br>";
	echo "User Name : ".DB_USER."<br>";
	echo "Password : ".DB_PASS."<br>";
	$db= new Database;
	echo "<br>Test ok";
}
?>