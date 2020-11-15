<?php 

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $messagecontent = "From: $fname  \n Message: $message";

    $recipient = "gerald@lucighub.com";

    $subject = "Let's Do Something Together";

    $mailheader = "From: $email \r \n";

    mail($recipient, $subject, $messagecontent, $mailheader ) or die("Error!");
    header( "Location: https://test.lucighub.com/gerald/" );

 ?>