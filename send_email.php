<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    $to = "jrevuelta89@outlook.com";
    $subject = "Message from Website Contact Form";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your email was successfully sent!";
    } else {
        echo "Email failed to send. Please try again.";
    }
}
?>
