<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->saveDownloadInfo('install.zip');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>BALSOFT - BALAN S.P | WEBDESIGNER | PHP, MYSQL PROGRAMMER </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="keywords" content="BALSOFT, BALAN S.P"/>
        <meta name="description" content="Balsoft - My Flash Works" />
        <meta http-equiv='Refresh' Content='2;URL=softs/install.zip'>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/swfobject_modified.js" ></script>
</head>
<body>
<h1 id="flash" style="clear:both;">prerequisite  Download</h1>
  <hr  style="clear:both;"/>
<div style="background-color:#fff; width:100%; padding-top:75px;" class="extcontent">
<center>

  <ol style="line-height:25px;">
    <li>Download the <a href="softs/install.zip" style="color:#666;"><strong>install.zip</strong> file</a>.</li>
    <li>Extract all the files inside the zip folder.<br />
      <img src="images/install/extract.jpg" alt="" width="320" height="204" /></li>
    <li>Copy all the files inside the c:\windows\system32 folder<br />
      <img src="images/install/run.jpg" alt="" width="432" height="220" /></li>
    <li>Right on <strong>install.bat</strong> and choose Run as Administrator.<br />
      <img src="images/install/runas.jpg" alt="" width="344" height="233" /><br />
    </li>
    <li>Click Yes<br />
      <img src="images/install/userctrl.jpg" alt="" width="499" height="306" /><br />
    </li>
    <li>That it you have succesfully installed the prerequities.</li>
  </ol>

</center>
</div>

<hr  style="clear:both;"/><br />

</body></html>
<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('install');
?>