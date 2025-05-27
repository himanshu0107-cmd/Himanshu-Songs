<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize form inputs.
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $messageContent = isset($_POST['message']) ? trim($_POST['message']) : '';

    if (empty($name) || empty($messageContent)) {
        echo "Please provide both name and message.";
        exit;
    }

    // Recipient email address.
    $to = "sahilpandey765@gmail.com.com";  // Change to your recipient email

    // Email subject.
    $subject = "Personalized Message from $name";

    // Email headers.
    $headers = "From: your_email@example.com\r\n"; // Update with your sender email
    $headers .= "Reply-To: sahilpandey765@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Build the email body in HTML.
    $body = "<html><body>";
    $body .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    $body .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($messageContent)) . "</p>";
    $body .= "</body></html>";

    // Send the email.
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
    }
}
?>
