<?php
$subjectPrefix = '[Your site name]';
$emailTo = 'youreemail@here.com';

$hasError = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = stripslashes(trim($_POST['email']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $email)) {
        die("Header injection detected");
    }

    $isEmailValid = preg_match('/^[^0-9][A-z0-9._%+-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/', $email);

    if($email && $isEmailValid){
        $subject = "$subjectPrefix";
        $body = "This email is subscribing to your newsletter from your website. <br /> Email: $email";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: $subjectPrefix <$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }

    if ($hasError) {
        echo "$email,$isEmailValid";
    } else if ($emailSent) {
        echo 'sent';
    }
}
?>
