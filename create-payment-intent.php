<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('your-secret-key');

// Get POST data
$data = json_decode(file_get_contents('php://input'), true);
$package_id = $data['package_id'];
$package_name = $data['package_name'];
$package_price = $data['package_price'];

try {
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $package_price,
        'currency' => 'usd',
        'payment_method_types' => ['card'],
        'description' => $package_name,
    ]);

    echo json_encode(['clientSecret' => $paymentIntent->client_secret]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle the error
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
