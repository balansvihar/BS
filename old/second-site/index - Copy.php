<?php ob_start("ob_gzhandler");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>BALSOFT - BALAN S.P | WEBDESIGNER | PHP, MYSQL PROGRAMMER | BALSOFT, SWAMYTHOPPY, NAGERCOIL</title>
 <meta http-equiv="Content-Language" content="EN">
 <meta http-equiv="imagetoolbar" content="no"> 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 <meta name="author" content="BALSOFT">
 <meta name="copyright" content="balan.spx@gmail.com" />
 <meta name="robots" content="index,follow" />
 <meta name="GOOGLEBOT" content="INDEX, FOLLOW" />
 <meta name="revisit-after" content="7 days" />
 <meta name="reply-to" content="balan.spx@gmail.com" />
 <meta name="document-classification" content="Internet" />
 <meta name="document-type" content="Public" />
 <meta name="document-rating" content="Safe for Kids" />
 <meta name="document-distribution" content="Global" />
 <meta name="keywords" content="BALSOFT, BALAN S.P"/>
 <meta name="description" content="BALSOFT - Hi, I am S.P. Balan, B.E Computer Science and Engineering graduate. I have developed some software under BALSOFT and I have uploaded on this site. You can download and use it freely." />

 <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <!--[if lte IE 6]>
             <link rel="stylesheet" href="css/styleIE6.css" type="text/css" media="screen"/>
        <![endif]-->
<script type="text/javascript" src="js/progress.js"> </script>        
<script type="text/javascript" src="js/jquery.php"></script>
<script type="text/javascript" src="js/funs.js"> </script>

<script type="text/javascript" src="js/jquery.bgpos.js"> </script>
    </head>
    <body>
    <div id="pageloading">
            <a href="home.php"><img src="images/balsoft-logo.jpg" alt="BALSOFT" border="0" title="BALSOFT"></a>
        <span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#000; ">Loading</span> 
        <img src="images/1.jpg" height="2" width="2">
        <img src="images/2.jpg" height="2" width="2">
        <img src="images/3.jpg" height="2" width="2">
    <div style="background-image:images/1.jpg"></div>
        <div style="background-image:images/2.jpg"></div>
        <div style="background-image:images/3.jpg"></div>
    </div>
<div id="wholepage" style="visibility:hidden;">

            <div class="banner"><a href="http://www.balsoft.in"><img src="images/balsoft-logo.jpg" alt="BALSOFT" width="116" height="38" border="0" align="middle"  title="BALSOFT"/></a></div>
        <div id="content">

    <a class="back" href="http://www.facebook.com/balan.sp" target=_blank> </a>

            <div id="menuWrapper" class="menuWrapper bg1">
                <ul class="menu" id="menu">
                    <li class="bg1" style="background-position:0 0;">
                        <a id="bg1" href="javascript:;">About Me</a>
                        <ul class="sub1" style="background-position:0 0;">
                         <li><a href="javascript:loadPage('my-self');">My Self</a></li>
                      <li><a href="javascript:loadPage('profile');">Profile</a></li>
                      
                            <li><a href="javascript:loadPage('achievements');">Achievements</a></li>
                        </ul>
                    </li>
                    <li class="bg1" style="background-position:-266px 0px;">
                        <a id="bg2" href="javascript:;">My Works</a>
                        <ul class="sub2" style="background-position:-266px 0;">
                          <li><a href="javascript:loadPage('designs');">Web Designs</a></li>
                          <li><a href="javascript:loadPage('flash');">Flash</a></li>
                           <li><a href="javascript:loadPage('softs');">Softs</a></li>
                        </ul>
                    </li>
                    <li class="last bg1" style="background-position:-532px 0px;">
                        <a id="bg3" href="javascript:;">Contact</a>
                        <ul class="sub3" style="background-position:-266px 0;">
                        <li><a href="javascript:javascript:loadPage('guest-book');">Guest Book</a></li>
                            <li><a href="http://www.orkut.co.in/Main#Profile?rl=mp&uid=16013718642691358580" target="_blank">Orkut</a></li>
                            <li><a href="http://www.facebook.com/balan.sp"  target="_blank">facebook</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
       
        </div>
        <div id="loading" class="loading"> <img src="images/loading.gif" alt="" width="34" height="20" align="middle"  />  </div>
<div class="extcontent" id="extcontent"><?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('index');
echo $balan->getHits('index');
?> Visits</div>

 
   
<script type="text/javascript">
	$("ul.gallery li").hover(function() { //On hover...
		
		var thumbOver = $(this).find("img").attr("src"); //Get image url and assign it to 'thumbOver'
		
		//Set a background image(thumbOver) on the &lt;a&gt; tag 
		$(this).find("a.thumb").css({'background' : 'url(' + thumbOver + ') no-repeat center bottom'});
		//Fade the image to 0 
		$(this).find("span").stop().fadeTo('normal', 0 , function() {
			$(this).hide() //Hide the image after fade
		}); 
	} , function() { //on hover out...
		//Fade the image to 1 
		$(this).find("span").stop().fadeTo('normal', 1).show();
	});


</script>



</div>

 </body>
 </html>