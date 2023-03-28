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
$mail->Username   = "surender@hireslick.com";
$mail->Password   = "Surender@#1036";

$mail->IsHTML(true);
$mail->AddAddress("surender.singal@gmail.com", "Surender");
$mail->AddAddress("surender.singal@gmail.com", "Surender");
$mail->AddAddress("piyush@buildnetic.com", "Piyush");
$mail->AddAddress("piyush.k@buildnetic.com", "Piyush");
$mail->AddAddress("jayant.m@buildnetic.com", "Jayant");
$mail->AddAddress("sales@buildnetic.com", "Sales");

$mail->SetFrom("surender@hireslick.com", "Buildnetic info");
$mail->AddReplyTo("info@buildnetic.com", "Buildnetic info");



$post = $_POST;

$name=$_POST['name'];
$email = $_POST['email'];
$assistanceWith = $_POST['assistanceWith'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
// $upload - jd = $_POST['upload-jd'];
// JOb Description upload

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploadjd"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//echo $imageFileType ;
//echo $_FILES["uploadjd"]["size"];

// Check if file already exists


// Check file size
if ($_FILES["uploadjd"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType !=
    "docx" && $imageFileType !=
    "pdf" && $imageFileType != "doc"
) {
    echo "Sorry, only JPG, JPEG, PNG & DOC,PDF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploadjd"]["tmp_name"], $target_file)) {
        $mail->addAttachment($target_file);   
       // echo "The file " . htmlspecialchars(basename($_FILES["uploadjd"]["name"])) . " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}



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




