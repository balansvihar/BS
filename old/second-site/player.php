
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>BALSOFT - BALAN S.P | WEBDESIGNER | PHP, MYSQL PROGRAMMER </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="keywords" content="BALSOFT, BALAN S.P"/>
        <meta name="description" content="Balsoft - My Flash Works" />
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/swfobject_modified.js" ></script>
</head>
<body>
<h1 id="flash" style="clear:both;">MY Flash</h1>
  <hr  style="clear:both;"/>
<div style="background-color:#000; width:100%; height:600px; padding-top:75px;" class="extcontent">
<center>
<div style="border:solid 10px #333; padding:0px; width:550px;">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="550" height="400" id="FlashID" title="BALSOFT PLAYER">
  <param name="movie" value="flash/<?php echo $_GET['play'];?>.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="8.0.35.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="js/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. width="550" height="400" -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="flash/<?php echo $_GET['play'];?>.swf" width="550" height="400" >
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.35.0" />
    <param name="expressinstall" value="js/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
  
</object>
</div>
</center>
</div>

  <hr  style="clear:both;"/><br />
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45600345-2', 'balansp.com');
  ga('send', 'pageview');

</script>


</body
></html>
