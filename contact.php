<?php 
putenv("TZ=Asia/Calcutta");

if($_POST['txtName']==""||$_POST['txtEmail']==""||$_POST['txtMsg']=="") exit(1);


function sendMail($from,$to,$subj,$msg){
  $headers = 'From: '.$from. "\r\n" .'Reply-To: '. $from . "\r\n" .'X-Mailer: PHP/' . phpversion();
  $sts= mail($to, $subj, $msg, $headers);
  return $sts;
} 

$from="balan@balsoft.in";
$to="balan.spx@gmail.com , balan_sp@yahoo.com";
$subj ="Enquiry through website From ". $from;

$msg="Name: ".$_POST['txtName'];
$msg.="\r\nMob No: ".$_POST['txtPhno'];
$msg.="\r\nEmail: ".$_POST['txtEmail'];
$msg.="\r\nMessage: " . $_POST['txtMsg'];
$msg.="\r\n\r\nDate: ". date("d-m-Y")."  Time:".date('h:i:s A',time())."   IP:".getenv("REMOTE_ADDR") ; 
//echo $msg;
$sts=sendMail($from,$to,$subj,$msg);
//$sts="1";
echo $sts;		
?>
