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
$steps=['#step1', '#step2', '#step3', '#step4', '#step5', '#step6', '#step7', '#step8'];

$post = $_POST;

$company_name=$_POST['company_name'];
$company_email = $_POST['company_email'];
$contact_name = $_POST['contact_name'];
$phone = $_POST['phone'];
$contact_message = $_POST['contact_message'];
$stepsValue = $_POST['stepsValue'];

$stepsArray=json_decode($stepsValue,true);
$stepsStr='';
foreach($stepsArray as $key=>$value){
    $stepsStr.= $steps[$key]."".$value."<br>";
}

$mail->Subject = "New Lead for Get in Touch";
$content= <<<END
        We have received a new requiment.Details are below <br><br>
        Company Name: $company_name <br>
        Company Email: $company_email <br>
        Contact Person : $contact_name <br>
        Phone/Mobile : $phone <br>
        Message : $contact_message <br>

        Form Steps :  <br><br>
        $stepsStr
        
    END;


$mail->MsgHTML($content);
if (!$mail->Send()) {
    // Error
} else {
    echo "Email sent successfully";
}


