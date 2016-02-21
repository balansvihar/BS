<?php
	$pos=$_GET['no'];
	if($pos=="") $pos=0;
	$string = file_get_contents("../portfolio.json");
	$json=json_decode($string,true);
	$size = sizeof($json["works"]);
	if($pos>$size-1)$pos=0;
	$data = $json["works"][$pos];
?>

<div class="portLeft">
				<img src="images/cap.jpg" />
				<img src="images/portfolio/<?php echo $data["img"]?>" />
		</div>
		<div class="portRight">
				<h3><?php echo $data["title"]?></h3>
				<a href="http://<?php echo $data["url"]?>" target="_balnk"><?php echo $data["url"]?></a>
				<p><?php echo $data["desc"]?></p>
		</div>
<div class="clear"></div>
