<!DOCTYPE HTML>
<html lang=en-US>
<head>
    <title>BALSOFT - Balan S.P, Web designer, HTML5, PHP, Banglore</title>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
    <meta http-equiv=Cache-Control content="public, max-age=5400, pre-check=5400">
    <meta http-equiv=Expires content=<?php echo date(DATE_RFC822,strtotime( " 7 day ")); ?>>
    <meta charset=utf-8>
    <meta name=description content="Hi, I am Balan S.P a front-end web developer from a place near to Kanyakumari, working as Technology Analyst at Infosys Banglore and i like Web designing..." />
    <meta name=robots content=index,follow />
    <link rel=stylesheet href=css/styles.css />
	
<body >
	<header>
		<nav>
			<a class="home" title="home" href="#"><img src="images/home.png"/></a> 
			<a class="about" title="about me" href="#about"><img src="images/about.png"/></a> 
			<a class="photography" title="my clicks" href="#photography"><img src="images/photography.png"/></a> 
			<a class="contact" title="contact me" href="#contact"><img src="images/contact.png"/></a> 
			<div class="clear"></div>
		</nav>
		<img class="line" src="images/line.png" />
	</header>	
	<article class=secIntro id="home">
	
		<p class="hi"><strong>hi</strong>, I am</p>
		
		<h1 class=balan>b<span>a</span>lan s.p</h1>
		<img class="banner" src="images/balan.sp.png" />
		<p class=center>a front-end <strong>web developer</strong> from a place near to <strong>Kanyakumari</strong> , working as Technology Analyst at <strong>Infosys</strong> Banglore and i like 
		<strong id=like>Web designing...</strong>
		</p>
	
	<img class="line" src="images/line.png" id="about"/>
	</article>
	
	<article class=secAbout >
		<h2 class="blue" >About Me</h2>
		
		<div class="aboutCnt">
			<p>Date of Birth : <span>Aug 02</span>, 1985</p>
			<p>Martial Status : <span>Single</span></p>
			<p>Languages : Tamil and <span>English</span></p>
			<h2 class="yellow">Programming</h2> 
			<p>Technologies : <span>HTML</span>, CSS, <span>PHP</span>, MySQL, AJAX, JavaScript, <span>JQuery</span>, SEO, <span>web designing</span> and Photo editing.</p>
			<p>Web Servers : Apache Http Server</p>
			<p>Frame Work : <span>Codeigniter</span>, Smarty</p>
			<p>DBMS: <span>MySQL</span>, PostgreSQL</p>
			<h2 class="gray">Work Experience</h2> 
			<ul>
				<li>Working as <span>Technology  Analyst</span> in <span>Infosys</span> Limited, Banglore.</li>
				<li>Worked as <span>Programmer Analyst</span> in <span>Cognizant Technology Solutions</span> , Chennai and Banglore.</li>
				<li>Worked as <span>Senior Software Engineer</span> in Web Development team at <span>Cape Consultancy Services Pvt. Ltd</span>, Nagercoil.</li>
				<li>Worked as <span>Research Assistant</span> at Centre for Aerospace Systems Design and Engineering <span>(CASDE)</span> at Department of Aerospace Engineering, <span>IIT Bombay</span>.</li>
				<li>Won <span>First Prize</span> for the <span>Web Designing</span> Contest and <span>Third Prize</span> for Software Development Contest held during <span>Empower I.T</span> 2008 State Level Campaign jointly hosted by <span>ELCOT, NASSCOM &amp; Govt of Tamil Nadu</span>.</li>
			</ul>
		</div>
		<img id="walle" src="images/walle.png" />
		<img class="line" src="images/line.png" />
	</article>
	
	
	<article class=secPortfolio>
		<h2 class="yellow" >Portfolio</h2>
		<div id="PortfolioHdr">
			<section>
				<div class="portfolioHldr">
					<div class="portLeft">
							<img src="images/cap.jpg" />
							<img src="images/portfolio/rone.jpg" />
					</div>
					<div class="portRight">
							<h3>Ra-One Game</h3>
							<a href="">www.balsoft.in/raone</a>
							<p>A simple game in HTML5, Canvas, CSS3 and Javascript. Developed 2012</p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="arrows">
					<a href="javascript:nextPort()"><img src="images/back.png" class="back" /></a>
					<a href="javascript:nextPort()"><img src="images/fwd.png" class="fwd"/></a>
					<div class="clear"></div>	
				</div>
				
			</section>
		</div>
		<img class="line" src="images/line.png" id="photography"/>
	</article>
		
	<article class=secPhoto>
		<h2 class="yellow" >My Clicks</h2>
		<section>
			<div class="leftbg">
				<div class="rightbg">
						<img src="photos/0.jpg" />
				</div>
			</div>
			<div class="arrows">
				<a href="javascript:prevPh()"><img src="images/back.png" class="back"/></a>
				<a href="javascript:nextPh()"><img src="images/fwd.png" class="fwd" /></a>
				<div class="clear"></div>	
			</div>
		</section>
		<img class="line" src="images/line.png" id="contact"/>
	</article>
			
	<article class=secContact>
		<h2 class="blue" >Contact Me</h2>
		<form class="formHldr" action="saveMsg.php" method="post" onsubmit="return false;">
			<h4>Thanks for visiting my website.</h4> 
			<div class="ctrl">
				<label for="txtName">Name* :</label>
				<input type="text" class="txt" id="txtName">
			</div>
			<div class="ctrl">
				<label for="txtEmail">Email* :</label>
				<input type="text" class="txt" id="txtEmail">
			</div>
			<div class="ctrl">
				<label for="txtPhno">Phone :</label>
				<input type="text" maxlength="10" class="txt" id="txtPhno">
			</div>
			<div class="ctrl">
				<label for="txtMsg">Message* :</label>
				<textarea class="txt" id="txtMsg" rows="4" class="msg"></textarea>
			</div>
			<input type="submit" class="send" value="send">
		</form>
		
		
		
	</article>
	
	<img class="line" src="images/line.png" />
	
	<article class=secLinks>
	<ul>
		<li><a href="https://www.facebook.com/balan.sp"><img src="images/fb.png" /></a></li>
		<li><a href="https://plus.google.com/108292393977305977179"><img src="images/g+.png" /></a></li>
		<li><a href="http://profile.yahoo.com/MTLSBP6IF6EQJFAEN2PQH6UU4Q/"><img src="images/y.png" /></a></li>
		<li><a href="http://www.linkedin.com/pub/balan-sp/46/866/600"><img src="images/in.png" /></a></li>
	</ul>
	<div class="clear"></div>
	</article>

	<script>
	var xmlhttp;
	var pic=0;
		function prevPo(){
			alert(0);
		}
		
		function nextPort(){
			ajax("portfolio.php",function(){
			  if (xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("PortfolioHdr").innerHTML=xmlhttp.responseText;
				}
			  });
		}
		
		

function ajax(url,cfunc)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("GET",url,true);
xmlhttp.send();
}
	
		
	</script>
</body>
</html>