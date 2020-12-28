<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['submit']) &&
isset($_POST['name']) && $_POST['name'] != '' &&
isset($_POST['email']) && $_POST['email'] != '' &&
isset($_POST['subject']) && $_POST['subject'] != '' &&
isset($_POST['message']) && $_POST['message'] != '') {
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        // Login credentials
        // THIS WHERE YOU NEED TO ADD YOUR OWN INFORMATION
        $accEmail       ="name@domain.com";
        $accPassword    ="password";        // This is sometimes different from the password you use for login (e.g. Yahoo has a different "App password")
        $accName        ="Account Name";

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

        header('Location: index.php?mailsend');
    }
}
?>