<?php
	$dir = './photos';
	$files = scandir($dir);
	$cap="";
	foreach($files as $file){
		if($file!="." && $file!=".." && $file!="0.jpg"){
		$cap=trim(str_replace(range(0,9),'',$file));
		$cap=trim(str_replace('.jpg','',$cap));
		$cap=trim(str_replace('-',' ',$cap));
		
?>
			<div class="slide">
				<img src="images/load.gif" rel="photos/<?php echo rawurlencode(utf8_encode($file)); ?>" />
				<div class="imgCaption bottom"><?php echo $cap; ?></div>
			</div>
<?php
		}
	}
?>