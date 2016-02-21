<?php
$filename="try-db.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$file = fopen($filename,"w");
	fwrite($file,$_POST['code']);
	fclose($file);
}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Try PHP</title>
</head>

<body>
<form action="" method="post">
    <textarea name="code" id="code" cols="45" rows="5" style="width:98%; height:500px;"><?php  readfile($filename);?></textarea><br />

    <input name="submit" type="submit" value="Save"/> <a href="<?php echo $filename;?>" target="_blank"><input name="button" type="button" value="Run" /> </a>
</form>
</body>
</html>
