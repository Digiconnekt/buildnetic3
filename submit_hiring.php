<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port       = 465;
$mail->Host       = "smtp.hostinger.com";
$mail->Username   = "info@buildnetic.com";
$mail->Password   = "Info@#$1036";

$mail->IsHTML(true);
$mail->AddAddress("surender.singal@gmail.com", "Surender");
$mail->AddAddress("piyush@buildnetic.com", "Piyush");
$mail->SetFrom("info@buildnetic.com", "Buildnetic info");
$mail->AddReplyTo("info@buildnetic.com", "Buildnetic info");
$mail->AddCC("info@buildnetic.com", "Buildnetic info");


$post = $_POST;

$name=$_POST['name'];
$email = $_POST['email'];
$assistanceWith = $_POST['assistanceWith'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
// $upload - jd = $_POST['upload-jd'];


$mail->Subject = "New Lead for Immediate Hire";
$content= <<<END
        We have received a new requiment.Details are below <br><br>
        Name: $name <br>
         Email: $email <br>
        Candidate with  : $assistanceWith <br>
        Phone/Mobile : $mobile <br>
        Message : $message <br>
        
    END;


$mail->MsgHTML($content);
if (!$mail->Send()) {
    // Error
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} else {
    echo "Email sent successfully";
    header("location: immediate-hire.php");
}




