<script type="text/javascript" src="js/progress"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.galleryview-1.1.js"></script>
<script type="text/javascript" src="js/jquery.timers-1.1.2.js"></script>
   <link rel="stylesheet" type="text/css" href="css/portfolio.css"/>


<div id="photos" class="galleryview">
  <div class="panel">

     <img src="img/gallery/01.jpg" /> 
    <div class="panel-overlay">
      <h2>Cape Institute of Technology</h2>
      <p>		
		www.capeitech.org</a>  
		View site  <a href="http://capeitech.org" target="_blank" class="lnk">Click Here</a>.	</span>	</p>
    </div>
  </div>

  <div class="panel">
     <img src="img/gallery/10.jpg" /> 
    <div class="panel-overlay">
      <h2>value Line India</h2>
      <p>Value Line India   View site <a href="http://www.valuelineindia.com" target="_blank" class="lnk">Click Here</a>. </p>

    </div>
  </div>

  <div class="panel">
     <img src="img/gallery/02.jpg" /> 
    <div class="panel-overlay">
      <h2>Tamizhan College of Engineering &amp; Technology</h2>
      <p>www.tamilancet.in  View site <a href="http://tamilancet.in" target="_blank" class="lnk">Click Here</a>. </p>
    </div>

  </div>
  
      <div class="panel">
     <img src="img/gallery/09.jpg" /> 
    <div class="panel-overlay">
      <h2>Avoid Plastics</h2>
      <p>Avoid Plastics    View site <a href="http://www.avoidplastics.com" target="_blank" class="lnk">Click Here</a>. </p>

    </div>
  </div>
  
  <div class="panel">
     <img src="img/gallery/03.jpg" /> 
    <div class="panel-overlay">
      <h2>Cape Renewable Energy Research Center</h2>
      <p>www.crerc.in.  View site <a href="http://www.crerc.in" target="_blank" class="lnk">Click Here</a>. </p>

    </div>
  </div>



  
   
  <div class="panel">
     <img src="img/gallery/05.jpg" /> 
    <div class="panel-overlay">
      <h2>KK SChools</h2>
      <p>KK Schools.com  View site <a href="http://www.kkschools.com" target="_blank" class="lnk">Click Here</a>. </p>

    </div>
  </div>


  
  <ul class="filmstrip">
    <li><img src="img/gallery/frame-01.jpg" alt="Cape Institute of Technology" title="Cape Institute of Technology" /></li>
         <li><img src="img/gallery/frame-10.jpg" alt="Value Line India" title="Value Line India" /></li>
    <li><img src="img/gallery/frame-02.jpg" alt="Tamizhan College of Engineering &amp; Technology" title="Tamizhan College of Engineering &amp; Technology" /></li>
        <li><img src="img/gallery/frame-09.jpg" alt="Avoid Plastics" title="Avoid Plastics" /></li>
    <li><img src="img/gallery/frame-03.jpg" alt="Cape Renewable Energy Research Center" title="Cape Renewable Energy Research Center" /></li>




     <li><img src="img/gallery/frame-05.jpg" alt="KK SChools" title="KK SChools" /></li>
  </ul>
</div>

<script type="text/javascript">

		$('#photos').galleryView({
			panel_width: 835,
			panel_height: 300,
			frame_width: 100,
			frame_height: 100
		});

</script>
 <?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('portfoilo');
?>