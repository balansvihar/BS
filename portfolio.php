<?php
error_reporting(0);
if($pos=="") $pos=0;
$string = file_get_contents("portfolio.json");
$json=json_decode($string,true);
$size = sizeof($json["works"]);

for($i=0;$i<$size;$i++){
$data = $json["works"][$i];
?>


<div class="slide">

		<div class="imgHolder">
			<div class="imgCap"></div>
			<img src="images/portfolio/<?php echo $data["img"]?>" alt="" title="" />
		</div>
		<div class="descHolder">
			<h3><?php echo $data["title"]?></h3>
			<h4 class=url><?php echo $data["url"]?></h4>
			<p><?php echo $data["desc"]?></p>
			<a class="btnLook" href="http://<?php echo $data['url']?>" target="_blank" title="take a look" target="_blank">Take a look</a>
		</div>
		<div class="clear"></div>

</div>
<?php
	}
?>
