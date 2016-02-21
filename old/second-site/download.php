<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->saveDownloadInfo($_GET['id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>BALSOFT - BALAN S.P | WEBDESIGNER | PHP, MYSQL PROGRAMMER </title>
        <meta http-equiv='Refresh' Content='2;URL=softs/<?php echo $_GET['id']; ?>.exe'>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="keywords" content="BALSOFT, BALAN S.P"/>
        <meta name="description" content="Balsoft - My Flash Works" />
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/swfobject_modified.js" ></script>
</head>
<body>
<h1 id="flash" style="clear:both;">MY SOFTS - Download</h1>
  <hr  style="clear:both;"/>
  <div class="extcontent" style= "height:20px ; width:650px; margin:75px auto"><img src="images/alert.png" width="40" height="40" align="absmiddle" /> <strong>You will require one or two DLL files to run these software. Click <a href="dlls.php" style="color:#666;" target="_blank">here</a> to download.</strong></div>
<div style="background-color:#fff; width:100%; height:500px; padding-top:5px;" class="extcontent">
  <center>
    <p><img src="images/softs/<?php echo $_GET['id']; ?>.jpg" alt="" width="212" height="180" /></p>
    <p>&nbsp;</p>
    <h2>DOWNLOADING...</h2>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><strong>The  file <?php echo $_GET['id']; ?>.exe should start downloading in a moment.     </strong></p>
    <p>&nbsp;</p>
    <p><strong> If it doesn't, you should be able to start the download by clicking <a href="softs/<?php echo $_GET['id']; ?>.exe">here</a>. </strong></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a href="index.php"><img src="images/home.jpg" alt="" width="218" height="61" border="0"/></a></p>
  </center>
</div>
<hr  style="clear:both;"/><br />


</body></html>
