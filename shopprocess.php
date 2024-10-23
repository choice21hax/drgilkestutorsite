<?php
require 'vendor/autoload.php'; // Make sure you install the Stripe PHP library via Composer

\Stripe\Stripe::setApiKey('YOUR_SECRET_STRIPE_KEY'); // Replace with your Stripe secret key

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $payment_method_id = $_POST['payment_method_id'];

    // Create a payment intent
    $intent = \Stripe\PaymentIntent::create([
        'amount' => 1000, // Amount in cents ($10.00)
        'currency' => 'usd',
        'payment_method' => $payment_method_id,
        'confirmation_method' => 'manual',
        'confirm' => true,
    ]);

    // Check if the payment was successful
    if ($intent->status === 'succeeded') {
        // Payment was successful, send email
        $to = 'youremail@example.com'; // Replace with your email address
        $subject = 'New Product Purchase';
        $body = "Name: $name\nEmail: $email\nAmount: $10.00\nPayment Status: Successful";

        // Use mail() or a mail library like PHPMailer
        mail($to, $subject, $body);

        echo "Payment successful! Thank you for your purchase.";
    } else {
        echo "Payment failed. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
