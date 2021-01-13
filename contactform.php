<?php

include('PHPMailer/Exception.php');
include('PHPMailer/OAuth.php');
include('PHPMailer/PHPMailer.php');
include('PHPMailer/POP3.php');
include('PHPMailer/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']) &&
isset($_POST['name']) && ($_POST['name'] != '') &&
isset($_POST['email']) && ($_POST['email'] != '') &&
isset($_POST['subject']) && ($_POST['subject'] != '') &&
isset($_POST['message']) && ($_POST['message'] != '')) {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        // Login credentials
        // THIS WHERE YOU NEED TO ADD YOUR OWN INFORMATION
        // TODO: Add email address, password and name
        /* Attention: Yahoo and other email providers require a pre-set application password, which is different from your 
        login passwordcan be created in your account settings */
        $accEmail       ="****";
        $accPassword    ="****";
        $accName        ="****";

        // User provided message
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $subjectLine = "WEBSITE: ".$subject;

        $body = "From: ".$name.", ".$mailFrom."\n";
        $body .= "Message sent: \n".$message;

        // Send E-Mail with PHPMailer
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->SMTPAuth     = true;
        $mail->SMTPSecure   = 'tls';

        // TODO: Use different host link and port if you want to use another mailing service
        $mail->Host         = 'smtp.mail.yahoo.com';
        $mail->Port         = 587;

        $mail->Username     = $accEmail;
        $mail->Password     = $accPassword;

        $mail->ContentType  = 'text/plain';
        $mail->IsHTML(false);

        $mail->Subject      = $subjectLine;
        $mail->Body         = $body;
        $mail->AltBody      = 'This is the alternative text-body';

        $mail->setFrom($accEmail, $accName);
        $mail->addAddress($accEmail, $accName);

        if(!$mail->send()) {
            echo 'Mailer Error: '.$mail->ErrorInfo;
        } else {
            echo 'Message sent !';
        }
        
        header('Location: index.php');
    }
}
?>