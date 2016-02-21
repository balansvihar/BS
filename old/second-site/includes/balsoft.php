<?php
include_once("database.php");
class Balsoft extends Database 
{
 function saveDownloadInfo($id)
 {
     $at=date("d-m-Y")." ".date('h:i:s A',time());
	 $this->record['id']=$id;
	 $this->record['ip']=$_SERVER['REMOTE_ADDR'];
	 $this->record['at']=$at;
	 $this->save('downloads');
 }
 function hits($page)
 {
     $at=date("d-m-Y")." ".date('h:i:s A',time());
	 $ip=$_SERVER['REMOTE_ADDR'];
	 $this->record['page']=$page;
	 $this->record['ip']=$ip;
	 $this->record['at']=$at;
	 $this->record['datee']=date("Y-m-d");
	 $this->save('hits');
 	 //Mail it
	 $to = "balan_sp@ibibo.com";

	 $subject = $ip." $page HIT";
	 $message = $subject;
	 $from = "hits@balsoft.in";
	 $headers = "From: $from";
	 mail($to,$subject,$message,$headers) or die("Error");
 }
 function getHits($page)
 {
	 return $this->recCount("hits","page='$page'");
 }

};

?>