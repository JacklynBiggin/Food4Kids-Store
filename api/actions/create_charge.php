<?php

require __DIR__ . '/../../vendor/autoload.php';

\Stripe\Stripe::setApiKey("sk_test_fJh8VXj0tMHbp4QdyVorSIXv");

$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];
$amount = $_POST['amount']

$customer = \Stripe\Customer::create([
    'email' => $email,
    'source'  => $token,
]);

$charge = \Stripe\Charge::create([
    'customer' => $customer->id,
    'amount'   => $amount,
    'currency' => 'cad',
]);

echo $amount;