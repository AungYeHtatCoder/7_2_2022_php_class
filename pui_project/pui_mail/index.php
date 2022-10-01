<?php 
require('phpmailer/PHPMailerAutoload.php');
//$mail = new PHPMailer;
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers 
$mail->Port = 587; // TCP port to connect to 
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted 
$mail->Username = 'nunuhtwecoder2022@gmail.com'; // SMTP username
$mail->Password = '09257031942'; // SMTP password 

$mail->setFrom('nunuhtwecoder2022@gmail.com', 'Wolfmania'); // Sender's Email
$mail->addAddress('uzinwebmdy@gmail.com'); // Recipient's Email
$mail->addReplyTo('nunuhtwecoder2022@gmail.com'); // Sender's Email
$mail->isHTML(true); // Set email format to HTML
$mail->Subject = 'PHP Mailer Subject'; // Subject

// Body of the message
$mail->Body = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>