<?php

$name = $_POST["name"];
$email = $_POST["email"]; 
$subject = $_POST["subject"]; 
$message = $_POST["message"]; 

require "home/chrirhhz/public_html/PHPMailer/src/Exception.php"; 
require "home/chrirhhz/public_html/PHPMailer/src/SMTP.php"; 
require "home/chrirhhz/public_html/PHPMailer/src/PHPMailer.php";

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception; 

$mail = new PHPMailer(true); 

$mail->isSMTP(); 
$mail->SMTPAuth = true; 

$mail->Host = "mail.privateemail.com"; // Changed SMTP host to namecheap option 
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