<?php 
if (defined('DB_HOST')) return; 
if ($_SERVER['HTTP_HOST']=="www.balsoft.in"||$_SERVER['HTTP_HOST']=="balsoft.in")
{
	define('DB_HOST','localhost');
	define('DB_NAME','balsofti_balsoft');
	define('DB_USER','balsofti_balan');
	define('DB_PASS','openthis');
	define('ONLINE','1');
	define('DEBUG',false);
}
else
{
	define('DB_HOST','localhost');
	define('DB_NAME','balsoft');
	define('DB_USER','root');
	define('DB_PASS','');
	define('ONLINE','0');
	define('DEBUG',false);

}

?>
