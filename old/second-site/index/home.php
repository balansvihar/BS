<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>BALSOFT - Balan S.P, Webdesigner, PHP, MySQL, Programmer Swamythoppu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Balan S.P, Webdesigner, PHP,MySQL Programmer Swamythoppu" />
        <meta name="keywords" content="Balan S.P, Swamythoppu"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <!--[if lte IE 6]>
             <link rel="stylesheet" href="css/styleIE6.css" type="text/css" media="screen"/>
        <![endif]-->
        
        

    <script type="text/javascript"  src="js/progress.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.bgpos.js"></script>
<script type="text/javascript" src="js/funs.js"> </script>
    </head>
    <body>
    <div id="pageloading">
            <a href="home.php">
        <img src="images/balsoft-logo.jpg" border="0">
        </a>
        Loading 
        <img src="images/1.jpg" height="2" width="2">
        <img src="images/2.jpg" height="2" width="2">
        <img src="images/3.jpg" height="2" width="2">
        <div style="background-image:images/1.jpg"></div>
        <div style="background-image:images/2.jpg"></div>
        <div style="background-image:images/3.jpg"></div>
    </div>
<div id="wholepage" style="visibility:hidden;">

            <div class="banner"><a href="http://www.balsoft.in"><img src="images/balsoft-logo.jpg" width="116" height="38" border="0" align="middle"/></a></div>
        <div id="content">

    <a class="back" href="http://www.facebook.com/balan.sp" target=_blank> </a>

            <div id="menuWrapper" class="menuWrapper bg1">
                <ul class="menu" id="menu">
                    <li class="bg1" style="background-position:0 0;">
                        <a id="bg1" href="javascript:;">About Me</a>
                        <ul class="sub1" style="background-position:0 0;">
                         <li><a href="javascript:loadPage('my-self');">My Self</a></li>
                      <li><a href="javascript:loadPage('profile');"">Profile</a></li>
                      
                            <li><a href="javascript:showGuestBook();"">Guest Book</a></li>
                        </ul>
                    </li>
                    <li class="bg1" style="background-position:-266px 0px;">
                        <a id="bg2" href="#">My Stuff</a>
                        <ul class="sub2" style="background-position:-266px 0;">
                            <li><a href="javascript:loadPage('designs');">Designs</a></li>
                      <li><a href="javascript:loadPage('codes');">Profile</a></li>
                            <li><a href="javascript:loadPage('Achievements');">Achievements</a></li>
                        </ul>
                    </li>
                    <li class="last bg1" style="background-position:-532px 0px;">
                        <a id="bg3" href="#">Contact</a>
                        <ul class="sub3" style="background-position:-266px 0;">
                            <li><a href="mailto:balan.spx@gmail.com">Email</a></li>
                            <li><a href="#">Orkut</a></li>
                            <li><a href="http://www.facebook.com/balan.sp">facebook</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
       
        </div>
        <div id="loading" class="loading"> <img src="images/loading.gif" alt="" width="34" height="20" align="middle"  />  </div>
<div class="extcontent" id="extcontent"></div>

 <!-- 
<div class="achivements" >

 <h1 id="profile">Achievements</h1>
  <hr /><br />
<br />
<style>
.image{
	float: left;
	margin: 0px;
	text-align: center;
	border: 1px solid #ccc;
	-moz-border-radius: 3px; /*--CSS3 Rounded Corners--*/
	-khtml-border-radius: 3px; /*--CSS3 Rounded Corners--*/
	-webkit-border-radius: 3px; /*--CSS3 Rounded Corners--*/
	display: inline; /*--Gimp Fix aka IE6 Fix--*/
	padding: 1px;
	border-bottom: 1px solid #ccc;

	
}
</style>
<div class="image">
  
  <style>

img {border: none;}

ul.gallery li {
	float: left;
	margin: 0px; padding: 0;
	text-align: center;
	border: 0px solid #ccc;
	-moz-border-radius: 3px; /*--CSS3 Rounded Corners--*/
	-khtml-border-radius: 3px; /*--CSS3 Rounded Corners--*/
	-webkit-border-radius: 3px; /*--CSS3 Rounded Corners--*/
	display: inline; /*--Gimp Fix aka IE6 Fix--*/
}
ul.gallery li a.thumb {
	width: 204px;
	height: 182px;
	padding: 5px;
	border-bottom: 1px solid #ccc;
	cursor: pointer;
}
ul.gallery li span { /*--Used to crop image--*/
	width: 204px;
	height: 182px;
	overflow: hidden;
	display: block;
}
ul.gallery li a.thumb:hover {
	background: #333;
}
ul.gallery li h2 {
	font-size: 12px;
	font-weight: bold;
	text-transform: uppercase;
	margin: 0; padding: 10px;
	background: #f0f0f0;
	border-top: 1px solid #fff; /*--Subtle bevel effect--*/
}
ul.gallery li a {text-decoration: none; color: #777; display: block;}
</style>
<ul class="gallery">
	<li>
		<a href="#" class="thumb"><span><img src="sushiandrobots_thumb.gif" alt="" /></span></a>
		<h2><a href="#">Empower IT</a></h2>
	</li>
</ul>
  
</div>
-->
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
<?php include("guest-book.php");?>



    


    

</div>
 </body>
 </html>