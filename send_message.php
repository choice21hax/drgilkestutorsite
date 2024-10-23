<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare email content
        $to = 'choice21ty@proton.me'; // Replace with your email address, PLEASE
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        // Dr. Gilkes note: replace that email and you will get a notif if someone tries to contact you.

        // Uncomment to send the email
        // mail($to, $subject, $body, $headers);

        // Alternatively, log to a file for testing
        file_put_contents('contact_form_submissions.txt', $body . "\n\n", FILE_APPEND);

        // Show a success message or redirect
        echo "Thank you for your message!";
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request.";
}
?>
