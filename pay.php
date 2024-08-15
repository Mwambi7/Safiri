<?php
session_start();
require_once('vendor/autoload.php'); // Include Stripe PHP library
require_once("connection.php");

// Set your secret key. Remember to switch to your live secret key in production.
\Stripe\Stripe::setApiKey('your-secret-key');

// Get the package details from the POST request
$package_id = $_POST['package_id'];
$package_name = $_POST['package_name'];
$package_price = $_POST['package_price'];

// Convert price to cents
$amount = intval($package_price);

// Create a PaymentIntent
try {
    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' => $amount,
        'currency' => 'usd',
        'payment_method_types' => ['card'],
        'description' => $package_name,
    ]);

    // Return the client secret to the client
    echo json_encode(['clientSecret' => $paymentIntent->client_secret]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Handle the error
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Page</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <header class="top-area">
        <!-- Your header content -->
    </header>

    <div class="main">
        <div class="container">
            <h1>Complete Your Payment</h1>
            <form id="payment-form">
                <input type="hidden" name="package_id" value="<?php echo htmlspecialchars($package_id); ?>">
                <input type="hidden" name="package_name" value="<?php echo htmlspecialchars($package_name); ?>">
                <input type="hidden" name="package_price" value="<?php echo htmlspecialchars($package_price); ?>">
                <div id="card-element"></div>
                <button id="submit-button" type="submit">Pay Now</button>
                <div id="error-message"></div>
            </form>
        </div>
    </div>

    <footer class="footer-copyright">
        <!-- Your footer content -->
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const stripe = Stripe('your-publishable-key'); // Replace with your actual publishable key
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const response = await fetch('pay.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    package_id: form.querySelector('input[name="package_id"]').value,
                    package_name: form.querySelector('input[name="package_name"]').value,
                    package_price: form.querySelector('input[name="package_price"]').value,
                }),
            });

            const { clientSecret } = await response.json();
            
            const { error, paymentIntent } = await stripe.confirmCardPayment(clientSecret, {
                payment_method: {
                    card: cardElement,
                },
            });

            if (error) {
                document.getElementById('error-message').textContent = error.message;
            } else if (paymentIntent.status === 'succeeded') {
                window.location.href = 'success.php'; // Redirect on successful payment
            }
        });
    });
    </script>
</body>
</html>
