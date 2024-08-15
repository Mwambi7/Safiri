<?php
session_start();
require_once('vendor/autoload.php'); // Make sure to include the Stripe PHP library
require_once("connection.php");

// Set your secret key. Remember to switch to your live secret key in production.
\Stripe\Stripe::setApiKey('your-secret-key');

$bookpackageshow = "";
$packageshow = "";
$show = "SELECT * FROM addpackages LIMIT 4";
$result = $conn->query($show);

while ($row = $result->fetch()) {
    $name = $row["package_name"];
    $imgshow = $row["uploadfile"];
    $price = $row["package_price"] * 100; // Convert to cents for Stripe

    $packageshow .= "
    <div class='col-md-6'>
        <div class='filtr-item'>
            <img src='data/items/og/" . $imgshow . "' alt='portfolio image' />
            <div class='item-title'>
                <a href='#'>" . $row["package_name"] . "</a>
                <p><span>12 tours</span><span>9 places</span></p>
            </div>
        </div>
    </div>";

    $bookpackageshow .= "
    <div class='col-md-4 col-sm-6'>
        <div class='single-package-item'>
            <img src='data/items/og/" . $imgshow . "' alt='package-place'>
            <div class='single-package-item-txt'>
                <h3>" . $row["package_name"] . " <span class='pull-right'>Rs: " . $row["package_price"] . "</span></h3>
                <div class='packages-para'>
                    <p><span><i class='fa fa-angle-right'></i> " . $row["package_duration"] . "</span></p>
                    <p><span><i class='fa fa-angle-right'></i> transportation</span><i class='fa fa-angle-right'></i> " . $row["package_features"] . "</p>
                </div>
                <div class='packages-review'>
                    <p>
                        <i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>
                        <span>2544 review</span>
                    </p>
                </div>
                <div class='about-btn'>
                    <form action='charge.php' method='POST'>
                        <input type='hidden' name='package_id' value='" . $row["id"] . "'>
                        <input type='hidden' name='package_name' value='" . $row["package_name"] . "'>
                        <input type='hidden' name='package_price' value='" . $price . "'>
                        <button type='submit' class='stripe-button'>Pay Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <header class="top-area">
        <!-- Your header content -->
    </header>

    <div class="main">
        <div class="container">
            <!-- Display packages and booking forms -->
            <?php echo $bookpackageshow; ?>
        </div>
    </div>

    <footer class="footer-copyright">
        <!-- Your footer content -->
    </footer>

    <script>
    // Handle the form submission
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            const form = event.target;

            const response = await fetch('create-payment-intent.php', {
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
            const stripe = Stripe('your-publishable-key');

            const { error } = await stripe.confirmCardPayment(clientSecret, {
                payment_method: {
                    card: {
                        number: '4242424242424242',
                        exp_month: '12',
                        exp_year: '2024',
                        cvc: '123',
                    },
                },
            });

            if (error) {
                console.error('Payment failed:', error);
            } else {
                window.location.href = 'success.php';
            }
        });
    });
    </script>
</body>
</html>
