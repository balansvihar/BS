<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hits</title>
</head>

<body>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
<caption>HITS</caption>
  <tr>
    <th>Sl</th>
    <th>Page</th>
    <th>IP</th>
    <th>Date Time</th>
  </tr>
<?php 
include("includes/database.php");
$db= new Database;
$today=date("Y-m-d");
//$rs = $db->query("SELECT * FROM hits WHERE BETWEEN '$today' AND '$today' ");
$rs = $db->query("SELECT * FROM hits WHERE datee= '$today'");
while($row = mysql_fetch_array($rs))
{


?>
  <tr>
    <td align="center" valign="middle"><?php echo ++$cnt;?></td>
    <td align="center" valign="middle"><?php echo $row['page'];?></td>
    <td align="center" valign="middle">
	<?php 
		if ($row['ip']=='122.165.232.43')
			echo $row['ip'].'-CCS';
		elseif ($row['ip']=='117.240.90.139')
			echo $row['ip'].'-CIT';
		else
			echo $row['ip'];
	?>
    </td><td align="center" valign="middle"><?php echo $row['at'];?></td>
  </tr>
<?php } ?>
</table>

</body>
</html>