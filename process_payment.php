<?php

require __DIR__ . "/vendor/autoload.php";

$stripe_secret_key = "sk_test_51OlBkrSF7CoYVXRggQ4lpiAz6wy5dAXsUYFZ14TOvEaFEiRF9rsZt3ZFRQkPgp71JY3yuvRe2Z0YQAmwvjHoeXMd00Fvopui3X";

\Stripe\Stripe::setApiKey($stripe_secret_key);

$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/avi/preppros/sucess.php",
    "cancel_url" => "http://localhost/avi/preppros/payment.php",
    "locale" => "auto",
    "line_items" => [
        [
            "quantity" => 1,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 2000,
                "product_data" => [
                    "name" => "T-shirt"
                ]
            ]
        ],
        [
            "quantity" => 2,
            "price_data" => [
                "currency" => "usd",
                "unit_amount" => 700,
                "product_data" => [
                    "name" => "Hat"
                ]
            ]
        ]        
    ]
]);

http_response_code(303);
header("Location: " . $checkout_session->url);