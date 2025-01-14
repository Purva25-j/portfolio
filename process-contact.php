<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

   
    $to = "purvajagdale02@gmail.com";
    $subject = "New Contact Form Submission";

    // Build the message body
    $body = "You have received a new message from your contact form.\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Message:\n" . $message . "\n";

    // Set headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Success message (Optional: You can redirect to a thank you page or show a success message)
        echo "Thank you for contacting us, we will get back to you soon.";
    } else {
        // Error message
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
