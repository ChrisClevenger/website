<?php

$name = $_POST["name"];
$email = $_POST["email"]; 
$subject = $_POST["subject"]; 
$message = $_POST["message"]; 

require "PHPMailer/src/Exception.php"; 
require "PHPMailer/src/SMTP.php"; 
require "PHPMailer/src/PHPMailer.php";

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 

$mail = new PHPMailer(true); 

$mail->isSMTP(); 
$mail->SMTPAuth = true; 

$mail->Host = "mail.chrisclevenger.com"; // corrected the typo
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587; 

$mail->Username = "mail@chrisclevenger.com"; 
$mail->Password = "Tr9141901!"; 

$mail->setFrom($email, $name); 
$mail->addAddress("contact@chrisclevenger.com", "Chris"); 

$mail->Subject = $subject;
$mail->Body = $message; 

$mail->send(); 

echo "email sent"; 

?>