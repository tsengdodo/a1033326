<?php
$uEmail=$_POST["uEmail"];
$sName=$_POST["sName"];
$uName=$_POST["uName"];
$message=$_POST["message"];

require("PHPMailer-master/PHPMailerAutoload.php");

$mail=new PHPMailer();


$mail->SMTPDebug=3;// Enable verbose debug output

$mail->isSMTP();// Set mailer to use SMTP
$mail->Host="mail.nuk.edu.tw"; // Specify main and backup SMTP servers  
$mail->SMTPAuth=true;// Enable SMTP authentication
$mail->Password="i200306977";//SMTP password
$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
$mail->Port=25;// TCP port to connect to 587


$mail->CharSet="utf-8";
$mail->setFrom('a1033326@nuk.edu.tw', $sName);
$mail->addAddress($uEmail);       // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Body    = $message;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>