<?php
function calcDiff($date1,$date2)
{
	//$date1 = "2007-03-24";
	
	$diff = abs(strtotime($date2) - strtotime($date1));
	
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	return  "$years / $months";
	//printf("%d years, %d months, %d days\n", $years, $months, $days);
}
$today = date("Y").'-'.date("m").'-'.date("d");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" / >
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW" / >
<title>Balan - Personal Info</title>
<style>
body {
	font: 12px Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
<p><strong>Work Experience </strong> [ Total Exp (YY / MM) :
  <?php  echo calcDiff("2008-06-01",$today); ?>
  ] </p>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" align="center">
  <tbody>
    <tr>
      <th width="230" align="center" valign="middle">Company Name</th>
      <th width="85" align="center" valign="middle">From</th>
      <th width="85" align="center" valign="middle">To</th>
      <th width="79" align="center" valign="middle">Exp YY / MM</th>
      <th width="79" align="center" valign="middle">Emp ID</th>
      <th width="79" align="center" valign="middle">Roll</th>
      <th width="79" align="center" valign="middle">Contact</th>
      <th width="79" align="center" valign="middle">Pin Code</th>
    </tr>
    <tr>
      <td align="left" valign="middle">Cape Consultancy Pvt Ltd</td>
      <td align="center" valign="middle">01 - 06 - 2008 (June)</td>
      <td align="center" valign="middle">15 - 04 - 2011 (April)</td>
      <td align="center" valign="middle"><?php echo calcDiff("2008-06-01","2011-04-15"); ?></td>
      <td align="center" valign="middle">7080701</td>
      <td align="center" valign="middle">Senoir Software Engineer</td>
      <td align="center" valign="middle">Raja / 9443483175</td>
      <td align="center" valign="middle">629 704</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">Cognizant Technology Solutions</td>
      <td align="center" valign="middle">18 - 04 - 2011 (April)</td>
      <td align="center" valign="middle">24 - 01 - 2013 (Feb)</td>
      <td align="center" valign="middle"><?php echo calcDiff("2011-04-18","2013-01-24"); ?></td>
      <td align="center" valign="middle">280802</td>
      <td align="center" valign="middle">Programmer Analyst</td>
      <td align="center" valign="middle">Arun Bharathi / 8095502868</td>
      <td align="center" valign="middle">560 045 </td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">Infosys</td>
      <td align="center" valign="middle">04 -02 - 2013 (Feb)</td>
      <td align="center" valign="middle">Till Date</td>
      <td align="center" valign="middle"><?php  echo calcDiff("2013-02-04",$today); ?></td>
      <td align="center" valign="middle">631120</td>
      <td align="center" valign="middle">Technology Lead <br/><strike>Technology Analyst [July 2015]</strike></td>
      <td align="center" valign="middle">&nbsp;</td>
      <td align="center" valign="middle">560 100</td>
    </tr>
  </tbody>
</table>
<p><strong>Education</strong> </p>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" align="center">
  <tbody>
    <tr>
      <th width="230" height="25" align="center" valign="middle">Course</th>
      <th width="290" align="center" valign="middle">Institution</th>
      <th width="85" align="center" valign="middle">From</th>
      <th width="85" align="center" valign="middle">To</th>
      <th width="79" align="center" valign="middle">Percentage</th>
      <th width="79" align="center" valign="middle">Roll</th>
      <th width="79" align="center" valign="middle">Board</th>
      <th width="79" align="center" valign="middle">Total Mark</th>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">B.E (Computer Science &amp; Engineering)</td>
      <td align="left" valign="middle">Cape Institute of Technology</td>
      <td align="center" valign="middle">June - 2005</td>
      <td align="center" valign="middle">Nov - 2008</td>
      <td align="center" valign="middle">71</td>
      <td align="center" valign="middle">95304104305</td>
      <td align="center" valign="middle">Anna University</td>
      <td align="center" valign="middle">3492 / 4900</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">Diploma in Computer Engineering</td>
      <td align="left" valign="middle">Moderator Gnanadason Polytechnic College</td>
      <td align="center" valign="middle">June - 2003</td>
      <td align="center" valign="middle"> April - 2005</td>
      <td align="center" valign="middle">77.5</td>
      <td align="center" valign="middle">2393355</td>
      <td align="center" valign="middle">State Board of Technical Education</td>
      <td align="center" valign="middle">1860 / 2400</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">H.S.C</td>
      <td align="left" valign="middle">S.M.S.M Suchindram</td>
      <td align="center" valign="middle">May - 2001</td>
      <td align="center" valign="middle">Mar - 2003</td>
      <td align="center" valign="middle">60.1</td>
      <td align="center" valign="middle">416275</td>
      <td align="center" valign="middle">State Board</td>
      <td align="center" valign="middle">710 / 1200</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">S.S.L.C</td>
      <td align="left" valign="middle">Gnana Deepam M.H.S.S</td>
      <td align="center" valign="middle">May - 2000</td>
      <td align="center" valign="middle">Mar - 2001</td>
      <td align="center" valign="middle">65.3</td>
      <td align="center" valign="middle">801499</td>
      <td align="center" valign="middle">Matriculation </td>
      <td align="center" valign="middle">719 / 1100</td>
    </tr>
  </tbody>
</table>
<p><strong>Diploma</strong></p>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" align="center">
  <tr>
    <th width="540">Semester / Year </th>
    <th width="540">Total    Marks</th>
    <th width="540">Maximum    Mark</th>
  </tr>
  <tr>
    <td>Semester 1 / Year 1</td>
    <td>NA</td>
    <td>NA</td>
  </tr>
  <tr>
    <td>Semester 2 / Year 1</td>
    <td>NA</td>
    <td>NA</td>
  </tr>
  <tr>
    <td>Semester 3 / Year 2</td>
    <td>403</td>
    <td>600</td>
  </tr>
  <tr>
    <td>Semester 4 / Year 2</td>
    <td>423</td>
    <td>600</td>
  </tr>
  <tr>
    <td>Semester 5 / Year 3</td>
    <td>490</td>
    <td>600</td>
  </tr>
  <tr>
    <td>Semester 6 / Year 3</td>
    <td>544</td>
    <td>600</td>
  </tr>
  <tr>
    <td>Total</td>
    <td><strong>1860</strong></td>
    <td>2400</td>
  </tr>
  <tr>
    <td colspan="2" width="540">Percentage</td>
    <td align="right"><strong>77.5%</strong></td>
  </tr>
</table>
<p><strong>B.E</strong></p>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" align="center">
  <tr>
    <th width="540">Semester / Year </th>
    <th width="540">Total    Marks</th>
    <th width="540">Maximum    Mark</th>
  </tr>
  <tr>
    <td>Semester 1 / Year 1</td>
    <td>NA</td>
    <td>NA</td>
  </tr>
  <tr>
    <td>Semester 2 / Year 1</td>
    <td>NA</td>
    <td>NA</td>
  </tr>
  <tr>
    <td>Semester 3 / Year 2</td>
    <td>628</td>
    <td>900</td>
  </tr>
  <tr>
    <td>Semester 4 / Year 2</td>
    <td>633</td>
    <td>900</td>
  </tr>
  <tr>
    <td>Semester 5 / Year 3</td>
    <td>637</td>
    <td>900</td>
  </tr>
  <tr>
    <td>Semester 6 / Year 3</td>
    <td>623</td>
    <td>900</td>
  </tr>
  <tr>
    <td>Semester 7 / Year 4</td>
    <td>581</td>
    <td>800</td>
  </tr>
  <tr>
    <td>Semester 8 / Year 4</td>
    <td>390</td>
    <td>500</td>
  </tr>
  <tr>
    <td>Total</td>
    <td>3492</td>
    <td>4900</td>
  </tr>
  <tr>
    <td colspan="2" width="540">Percentage</td>
    <td align="right"><strong>71.27%</strong></td>
  </tr>
</table>
<p><strong>Others</strong></p>
<table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" align="center">
  <tbody>
    <tr>
      <th width="230" align="center" valign="middle">Items</th>
      <th width="85" align="center" valign="middle">No</th>
      <th width="79" align="center" valign="middle">From</th>
      <th width="79" align="center" valign="middle">Till</th>
    </tr>
    <tr>
      <td align="left" valign="middle">Driving Licence</td>
      <td align="center" valign="middle">F / TN74 / 00 29 86 / 2004</td>
      <td align="center" valign="middle">02 - 07 - 2004</td>
      <td align="center" valign="middle">01 - 07 -2024</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">Passport (Madurai, [File No: MDU-Z1-81-67-208])</td>
      <td align="center" valign="middle">G - 920 - 7509 </td>
      <td align="center" valign="middle">29 - 07 - 2008</td>
      <td align="center" valign="middle">28 - 07 - 2018</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">PAN Card</td>
      <td align="center" valign="middle">BED - PB- 150 - 6E</td>
      <td align="center" valign="middle">&nbsp;</td>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left" valign="middle">IT PIN</td>
      <td align="center" valign="middle">661 - 054 - 894 - 097</td>
      <td align="center" valign="middle">&nbsp;</td>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</body>
</html>
