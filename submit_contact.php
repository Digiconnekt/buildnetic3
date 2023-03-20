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
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.office365.com";
$mail->Username   = "clickandcollect@delhidutyfree.co.in";
$mail->Password   = "Ddfs$32145";

$mail->IsHTML(true);
$mail->AddAddress("surender.singal@gmail.com", "Surender");
$mail->AddAddress("surender.singal@gmail.com", "Surender");
$mail->AddAddress("piyush@buildnetic.com", "Piyush");
$mail->AddAddress("piyush.k@buildnetic.com", "Piyush");
$mail->AddAddress("jayant.m@buildnetic.com", "Jayant");
$mail->AddAddress("sales@buildnetic.com", "Sales");

$mail->SetFrom("clickandcollect@delhidutyfree.co.in", "Buildnetic info");
$mail->AddReplyTo("info@buildnetic.com", "Buildnetic info");

$steps = ['#step1', '#step2', '#step3', '#step4', '#step5', '#step6', '#step7', '#step8'];

$post = $_POST;

$full_name = $_POST['full_name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$company_size = $_POST['company_size'];
$enquiry_about = $_POST['enquiry_about'];
$message = $_POST['message'];



$mail->Subject = "New Submission on Contact form";
$content = <<<END
        We have received a new contact request.Details are below <br><br>
        Full Name: $full_name <br>
        Company Name: $company_name <br>
        Email: $email <br>
        Contact No : $mobile <br>
        Company Size : $company_size <br>
        Enquiy  : $enquiry_about <br>
        
        Message : $message <br>

       
        
    END;


$mail->MsgHTML($content);
if (!$mail->Send()) {
    // Error
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} else {
    echo "Email sent successfully";
    header("location: thank-you.php");
    
}

