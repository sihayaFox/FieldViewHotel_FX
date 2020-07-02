<?php

    $myAwardSpaceEmail = "niroshan95.dev@gmail.com";
    $myPersonalEmail = "niroshan95.dev@gmail.com";
    
    if(isset($_POST['submit'])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $myAwardSpaceEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message was sent successfully!';
        mail($myPersonalEmail, $subject, $message, $headers);
    } else {
        echo 'An error has occurred!';
    }
?>
