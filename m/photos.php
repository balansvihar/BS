<?php
	$dir = '../photos';
	$files = scandir($dir);
	$i=0;
	foreach($files as $file){
		if($file!="." && $file!=".."){
			$photos[$i++]=$file;
		}
	}
	$photos[$i]="";
	$pos=$_GET['no'];
	if($pos=="") $pos=0;
	echo '<img src="../photos/'.$photos[$pos] .'" />';
?>
		