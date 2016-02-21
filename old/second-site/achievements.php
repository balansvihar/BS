<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<body onLoad="MM_preloadImages('images/empowerit.jpg')">
 <h1 id="my-self">My Self</h1>
  <hr />
  <br />
<br />

  
  <ul>
  
    <li>Won <strong>First Prize</strong> for the <strong>Web Designing Contest </strong>and <strong>Third Prize </strong>for <strong>Software Development Contest </strong> held during <strong>Empower I.T 2008 State Level </strong>Campaign jointly hosted by  <strong>ELCOT , NASSCOM &amp; Govt of Tamil Nadu<u></u></strong></li>
  </ul>
  <p>&nbsp;</p>
  

<center>
<div style="border:solid 2px #666; padding:1px; width:432px; height:288px;">
<a href="javascript:loadPage('empowerit');" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('EmpowerIT','','images/empowerit.jpg',1)"><img src="images/empowerit-bw.jpg" alt="EmpowerIT" name="EmpowerIT" width="432" height="288" border="0" id="EmpowerIT" /></a>

</div>
<strong><br />

<a href="javascript:loadPage('empowerit');" style="color:#333;"> MORE...</a></strong>
</center>


<p>&nbsp;</p>
  <ul>
    <li>Won the <strong>Ada Lovelace </strong>award for the best contribution in <strong>Programming &amp; Multimedia </strong>for the wellbeing of CSE department in Cape Institute of Technology in April 2008.<strong><u></u></strong></li>
  </ul>
  <p>&nbsp;</p>
  <center>
  <div style="border:solid 2px #666; padding:1px; width:432px; height:288px;"> <a href="images/adaaward-full.jpg" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('EmpowerIT21','','images/adaaward.jpg',1)"><img src="images/adaaward-bw.jpg"-bw.jpg" alt="EmpowerIT" name="EmpowerIT21" width="432" height="288" border="0" id="EmpowerIT21" /></a> </div>
  </center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <ul>
    <li> Won the <strong>Best Contributor </strong>award from the Computer Engineers’ Technical Association, Cape Institute of Technology for the academic year 2007-08</li>
  </ul>
<p>&nbsp;</p>
<hr />
<?php 
require_once("includes/balsoft.php");
$balan = new Balsoft;
$balan->hits('achievements');
?>