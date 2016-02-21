<div class="softs" >
 <h1 id="guest-book">Guest Book</h1>
 <hr />
<iframe src="facebook.php" width="855" height="480" frameborder="0" style="border-style:none; overflow:hidden;" ></iframe>
<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('guest-book');
?>