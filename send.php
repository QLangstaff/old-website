Thanks for your message!

<?php

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userMessage = $_POST['message'];

    $to = "qali.langstaff@hotmail.com";
    $subject = "Message from qali.me";
    $body = "Information submitted: ";


    $body .= "\r\n Name: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Message: " . $userMessage;

    mail($to, $subject, $body);
?>
