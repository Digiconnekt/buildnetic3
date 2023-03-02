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
$mail->Username   = "sales@buildnetic.com";
$mail->Password   = "Sales@#123";

$mail->IsHTML(true);
$mail->AddAddress("surender.singal@gmail.com", "Surender");
$mail->AddAddress("piyush@buildnetic.com", "Piyush");
$mail->SetFrom("sales@buildnetic.com", "Buildnetic Sales");
$mail->AddReplyTo("sales@buildnetic.com", "Buildnetic Sales");
$mail->AddCC("sales@buildnetic.com", "Buildnetic Sales");
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
} else {
    echo "Email sent successfully";
    
}
header("location: thank-you.php");
