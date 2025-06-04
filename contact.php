<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $phone   = htmlspecialchars($_POST["phone"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $project = htmlspecialchars($_POST["project"]);
    $message = htmlspecialchars($_POST["message"]);

    $fullMessage = "Name: $name\nEmail: $email\nPhone: $phone\nProject: $project\nSubject: $subject\n\nMessage:\n$message";

    if (mail("pinpropertiesuk@gmail.com", "New Contact Form Submission", $fullMessage, "From: $name <$email>")) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
}
?>
