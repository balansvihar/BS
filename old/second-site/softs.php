		<script type="text/javascript">
		$(function() {
			$('ul.hover_block li').hover(function(){
				$(this).find('img').animate({top:'182px'},{queue:false,duration:500});
			}, function(){
				$(this).find('img').animate({top:'0px'},{queue:false,duration:500});
			});
			$('ul.hover_block2 li').hover(function(){
				$(this).find('img').animate({left:'300px'},{queue:false,duration:500});
			}, function(){
				$(this).find('img').animate({left:'0px'},{queue:false,duration:500});
			});
		});
		</script>
		<style>
		
		
		ul.hover_block li, ul.hover_block2 li {
			list-style:none;
			float:left;
			background: #1A1A1A;
			padding: 10px;
			width:210px; position: relative;
			margin: 20px 20px 20px 0; }

		ul.hover_block li a, ul.hover_block2 li a {
			display: block;
			position: relative;
			overflow: hidden;
			height: 170px;
			width: 200px;
			padding: 5px;
			padding-bottom
			color: #fff;
			font: 12px Helvetica, Arial, sans-serif;
			
		}

		ul.hover_block li a, ul.hover_block2 li a { text-decoration: none; color: #ffffff;}

		ul.hover_block li img, ul.hover_block2 li img {
			position: absolute;
			top: 0;
			left: 0;
			border: 0;
		}
		</style>
<div class="softs" >
 <h1 id="softs">Softs</h1>
 <hr /><br />
<br />
<div style= "height:20px ; width:650px; margin:10px auto 30px 200px;"><img src="images/alert.png" width="40" height="40" align="absmiddle" /> <strong>You will require one or two DLL files to run these software. Click <a href="dlls.php" style="color:#666;" target="_blank">here</a> to download.</strong></div>
<ul class="hover_block">

      <li><a href="download.php?id=cddriveejector" target="_blank"><img src="images/softs/cddriveejector.jpg" /><b>CD DRIVE EJECTOR</b><br /><br />'CD Drive Ejector' ejects the CD/DVD Drive tray of your computer by simply pressing  hot keys. By default the Ctrl+Alt+ drive letter as your hotkey. you can change this hot keys dynamically.
  <br /><br /><center><b>DOWNLOAD</b></center> </a></li>
	
   	<li><a href="download.php?id=dvdcutter" target="_blank"><img src="images/softs/dvdcutter.jpg" /><b>DVD CUTTER</b><br /><br />'DVD Cutter' enables you to cut the interested part of the movie or VOB file. The software does not involves compression techniques so that the original quality of the source remains the same.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>
    
	<li><a href="download.php?id=javaeditor" target="_blank"><img src="images/softs/javaeditor.jpg" /><b>JAVA CODE EDITOR</b><br /><br />'JAVA Code Editor' is a light weight editor that facilitates the developers to edit and compile java programs in an efficient manner. This software enables the user to eradicate the traditional means of using notepad for editing and command prompt for compiling the java code. Java code can be compiled by using F9 and the code can be executed using F5 key.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=foldertohtml" target="_blank"><img src="images/softs/foldertohtml.jpg" /><b>FOLDER TO HTML</b><br /><br />'Folder To HTML' software allows you to generate HTML page which contains list of the folder names of the specified directory. This can be used for indexing your CD backups.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>


	<li><a href="download.php?id=quickshutdown" target="_blank"><img src="images/softs/quickshutdown.jpg" /><b>QUICK SHUTDOWN</b><br /><br />'Quick Shutdown' enables the user to shutdown the system in quicker means.  Create a short cut of this application in your program menu and assign a short cut key so that you can shut down the system by pressing hotkey.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=rammonitor" target="_blank"><img src="images/softs/rammonitor.jpg" /><b>RAM MONITOR</b><br /><br />'RAM Monitor' light weight applicaition displays the current usage of the system's RAM free space and usage level.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=rvf" target="_blank"><img src="images/softs/rvf.jpg" /><b>RESISTOR VALUE FINDER</b><br /><br />'Resistor Value Finder' helps the user to find the value of a resistor by getting its color code as input. This application will be more apt for the students exercising in electrical background.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=taskmanager" target="_blank"><img src="images/softs/taskmanager.jpg" /><b>TASK MANGER</b><br /><br /> 'Balsoft Task Manager' can be used as an alternate to windows task manager. This application may be useful,  when the widows task manager is disabled due to any  virus or worm infection. 

<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=copygear" target="_blank"><img src="images/softs/copygear.jpg" /><b>COPY GEAR</b><br /><br />'Copy Gear' application is provided with three types of triggers, in order to enhance the system capability of copying the files in faster means.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=quicktextsearch" target="_blank"><img src="images/softs/quicktextsearch.jpg" /><b>QUICK TEXT SEARCH</b><br /><br />
'Quick Text Search' application search the string inside all the files in a given input folder. Specialty of this application is that it can detect the occurrence of the string efficiently if the number of files gets increased also this application is very light weighted.

<br /><br /><center><b>DOWNLOAD</b></center> </a></li>

	<li><a href="download.php?id=windowsxp.wsz" target="_blank"><img src="images/softs/windowsxp.wsz.jpg" /><b>WINAMP SKIN</b><br /><br />Cool blue Balsoft Winamp skin.
<br /><br /><center><b>DOWNLOAD</b></center> </a></li>


</ul>
</div>
<br /><br /><br /><br />
 <hr  style="clear:both"/><br />
<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('softs');
?>