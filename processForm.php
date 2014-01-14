<?php 

header("Content-Type: text/html;charset=utf-8");

$contact = $_POST['contact'];
$name = $contact['name'];
$phone = $contact['phone'];
$email = $contact['email'];
$message = $contact['message'];

//Envio de email
$to = "sales@suxessclothing.com";
$subject = "[Suxess Clothing] new message";
$body = ' 
<html> 
	<head> 
		<title>Suxess Clothing - New Message</title> 
	</head> 
	<body>  
		<p><b>Name: </b> '.$name.'</p>
		<p><b>Phone: </b> '.$phone.'</p> 
		<p><b>Email: </b> '.$email.'</p> 
		<p><b>Message: </b> '.$message.'</p>
	</body> 
</html>
'; 

//Envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 

//Dirección del remitente 
$headers .= "From: ".$name." <".$email.">\r\n"; 

$sended = mail($to, $subject, $body, $headers);

echo $sended;