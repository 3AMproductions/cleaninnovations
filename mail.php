<?php
  require_once('mail/ext.phpmailer.php');

	function mail_sent($p){
    $mail = new my_phpmailer();
  	$mail->to = array(array("OSULatinoStudies@gmail.com","OSULatinoStudies"));
    $mail->IsMail();
  
  	$mail->FromName = $p['name'];
    $mail->From = $p['email'];
    $mail->Subject = 'Message from Clean Innovations Web Site';
    $mail->Body = "\nContact Information:\n\n\tName:\t\t".addslashes($p['name'])."\n\t";
  	$mail->Body .= "Email:\t".addslashes($p['email'])."\n\n";
		$mail->Body .= "Comments:\n\n\t".addslashes($p['misc'])."\n\t";
      	
  	return $mail->Send();
	}	
?>
