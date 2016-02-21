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
 <h1 id="empowerit">EMPOWER IT</h1>
 <hr /><br />
<br />


  ELCOT (Electronics Corporation of TamilNadu) & NASSCOM Chennai , co-ordinated a campaign to take IT to tier 2 cities in TamilNadu. Six locations (Hosur, Salem, Madurai, Trichy, Coimbatore & Tirunelveli) has been identified to spread the benefits of IT uniformly across the state. This campaign was kicked-off with an Industry – Students meet in the deep south twin cities of Tirunelveli – Palayamkottai on 18th and 19th of Jan 2008. There were close to 10,000 students from 4 districts in Deep South Tirunelveli, Kanyakumari, Tutucorin and Virudhunagar..ELCOT has announced lots of competitions (close 10) for the students like Coding, Debugging, Website Designing, Software Development, Project Presentation, Quiz etc. The inaugural function and valedictory function was attended by a mix by IAS officers and State Government Ministers like Mr. UmaShankar IAS,who is the managing director of ELCOT and Mrs. Poongothai – Minister for Social Welfare.I engaged myself with Software Development and Website Designing of the competitions and won second prize for Software Development , first prize for website designing.</p>
<ul class="hover_block">
  <li ><a href="images/empowerit/empowerit-full.jpg" target="_blank" style="background-image:url(images/empowerit/empowerit.jpg);"><img src="images/empowerit/empowerit-bw.jpg" /></a></li>

  <li ><a href="images/empowerit/softdevelop-full.jpg" target="_blank" style="background-image:url(images/empowerit/softdevelop.jpg);"><img src="images/empowerit/softdevelop-bw.jpg" /></a></li>
  
     <li ><a href="images/empowerit/coding-full.jpg" target="_blank" style="background-image:url(images/empowerit/coding.jpg);"><img src="images/empowerit/coding-bw.jpg" /></a></li>
     
    <li ><a href="images/empowerit/webdesign-full.jpg" target="_blank" style="background-image:url(images/empowerit/webdesign.jpg);"><img src="images/empowerit/webdesign-bw.jpg" /></a></li>

  <li ><a href="images/empowerit/roadshowprize-full.jpg" target="_blank" style="background-image:url(images/empowerit/roadshowprize.jpg);"><img src="images/empowerit/roadshowprize-bw.jpg" /></a></li>
  
      
   <li ><a href="images/empowerit/roadshow-full.jpg" target="_blank" style="background-image:url(images/empowerit/roadshow.jpg);"><img src="images/empowerit/roadshow-bw.jpg" /></a></li>
    

      


      
</ul>
</div>
<br /><br /><br /><br />
 <hr  style="clear:both"/><br />
 <?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('empowerit');
?>