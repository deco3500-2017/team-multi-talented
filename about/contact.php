<?php
$subjectPrefix = '[Your site name]';
$emailTo = 'youreemail@here.com';

$hasError = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name     = stripslashes(trim($_POST['name']));
    $email    = stripslashes(trim($_POST['email']));
    $subject    = stripslashes(trim($_POST['subject']));
    $message  = stripslashes(trim($_POST['message']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message)) {
        die("Header injection detected");
    }

    $emailIsValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($name && $email && $emailIsValid && $message){
        $mailSubject = "$subjectPrefix";
        $body = "Name: $name <br /> Email: $email <br /> Subject: $subject <br /> Message: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $name <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $mailSubject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }

    if ($hasError) {
        echo 'error';
    } else if ($emailSent) {
        echo 'sent';
    }
}
?>
