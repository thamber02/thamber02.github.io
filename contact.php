<?php
    $name = $_POST['name'];
    //Stores Visitors Emails//
    $visitor_email = $_POST['email'];
    //Stores Messages//
    $message = $_POST['message'];

    //From where emails will be sent to//
    $email_from = 'thamberoot@gmail.com';
    //Email Subjects//
    $email_subject = "Visitors Messages";
    //Sent to Email//
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                     "User Message: $message.\n";

    //From where the inquiries will be received at//
    $to = "thamber02@hotmail.com";

    $headers = "From: $email_from \r\n";

    $header .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: Contact.html");


    ?>