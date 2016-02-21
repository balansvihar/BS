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

 <h1 id="flash" >Flash</h1>
  <hr  ><br />
<br />
<ul class="hover_block">

	
    <li><a href="player.php?play=depsi" target="_blank"><img src="images/flash/depsi.jpg" /><b>DEPSI</b><br /><br />Flash animation created just for fun. When there is allige that there is pesticides contains in a famous soft drink.<br /><br /><center><b>VIEW</b></center></a></li>
	
    <li><a href="player.php?play=ceta" target="_blank"><img src ="images/flash/ceta.jpg" /> <b>CETA INAGURATION</b><br /><br />Flash animation created for my college association inaguration day.<br /><br /><center><b>VIEW</b></center></a></li>
    
	<li><a href="player.php?play=cseitblock" target="_blank"><img src ="images/flash/cseitblock.jpg" /> <b>CSE IT BLOCK INAGURATION</b><br /><br />This software is able to cut the .vob files. This software also has the build in vob joiner.<br /><br /><center><b>VIEW</b></center></a></li>
     
	<li><a href="flash/sahana07.exe"><img src="images/flash/sahana.jpg"  /><b>SAHANA `07</b><br /><br />Flash animation created for my college symoposium named  in the year 2007.
<br /><br /><center><b>VIEW</b></center> </a></li> 
     
	<li><a href="player.php?play=dolmix" target="_blank"><img src ="images/flash/dolmix.jpg" /> <b>INCREDIBLE DOL-MIX</b><br /><br />Animation created for my college day 2006.<br /><br /><center><b>VIEW</b></center></a></li>
	  
      	<li><a href="player.php?play=startup" target="_blank"><img src ="images/flash/startup.jpg" /> <b>CIT-IT BLOCK OPENING STARTUP</b><br /><br />This presentation created for the opening of CSE IT block opening for my college.<br /><br /><center><b>VIEW</b></center></a></li>   
		
        	<li><a href="player.php?play=prayer" target="_blank"><img src ="images/flash/prayer.jpg" /> <b>PRAYER SONG</b><br /><br />Prayer song animation created for my college day 2006.<br /><br /><center><b>VIEW</b></center></a></li>
             
	<li><a href="player.php?play=stickmandiwali" target="_blank"><img src ="images/flash/stickmandiwali.jpg" /> <b>Diwali '05</b><br /><br />Funny animation created in a diwali day 2005.<br /><br /><center><b>VIEW</b></center></a></li>
				     
	<li><a href="player.php?play=planety" target="_blank"><img src ="images/flash/planety.jpg" /> <b>PLANET Y</b><br /><br />Created during my diploma day. Planed to create a movie where a herion save the world from ALien Attack. Unfortunaly couldnt complete fully.<br /><br /><center><b>VIEW</b></center></a></li>
		


<li><a href="player.php?play=lovecalc" target="_blank"><img src ="images/flash/lovecalc.jpg" /> <b>LOVE CALCULATOR</b><br /><br />Created using flash action script with the secret algrothium that predicts the depth of love towards you and you love one.<br /><br /><center><b>VIEW</b></center></a></li>
		
	     

	<li><a href="player.php?play=psaver" target="_blank"><img src ="images/flash/psaver.jpg" /> <b>MY POWER SAVER PLAN</b><br /><br />This is my idea right from diploma days to save the electric power. This animation is created to demonstrate my ideas to my proffessor. Late Mr.Edwin <br /><br /><center><b>VIEW</b></center></a></li>
		
		     
	<li><a href="player.php?play=driver" target="_blank"><img src ="images/flash/rajkumar.jpg" /> <b>DRIVER DROWSINESS ALERT</b><br /><br />Created this animtion in request of my college mates Raj Kumar and Pitchai (ECE)  for their Paper presentaion on Driver Drowsiness Alert System .<br /><br /><center><b>VIEW</b></center></a></li>
		
        
	<li><a href="player.php?play=asivam" target="_blank"><img src ="images/flash/asivam.jpg" /><b>ANBE SIVAM</b><br /><br />Created just for fun.<br /><br /><center><b>VIEW</b></center></a></li>
    
    		     
	<li><a href="player.php?play=diwali06" target="_blank"><img src ="images/flash/diwali06.jpg" /> <b>DIWALI `06</b><br /><br />
  Created on diwali day 2006.
     <br /><br /><center><b>VIEW</b></center></a></li>	
        
	<li><a href="player.php?play=dino" target="_blank"><img src ="images/flash/dino.jpg" /> <b>DINO</b><br /><br />
My very first flash animation. Drawn these Dinosaurs by viewing the Dinamalar Siruvarmalar article.
     <br /><br /><center><b>VIEW</b></center></a></li>


</ul>
<br /><br /> <hr  style="clear:both"/><br />

<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('flash');
?>