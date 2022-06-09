<?php
if(isset($_POST["massage"])){
    $to      = "info@stressreviv.com";
	
	$subject = "Contact Request From Website ".date('M d, Y, h:i:sp', time());
    $message = $_POST["massage"]; 
	
    $headers = "From: ".$_POST["nam‌​e​"]." <".$_POST['em‌​ail‌​'].">\r\n"; 
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers = "Reply-To: ".$_POST["ema‌​il‌​"]."\r\n"; 
    "X-Mailer: PHP/" . phpversion();
    
	if(mail($to, $subject, $message, $headers)) echo json_encode(['success'=>true]); 
    else echo json_encode(['success'=>false]);
    exit;

 }

?>