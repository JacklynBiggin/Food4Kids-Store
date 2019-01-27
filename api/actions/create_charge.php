<?php

require __DIR__ . '/../../vendor/autoload.php';
$config = require_once __DIR__ . '/../requires/config.php';
\Stripe\Stripe::setApiKey("sk_test_fJh8VXj0tMHbp4QdyVorSIXv");

$token  = $_POST['token'];
$email  = $_POST['email'];
$amount = $_POST['amount'];


$customer = \Stripe\Customer::create([
    'email' => $email,
    'source'  => $token,
]);

$charge = \Stripe\Charge::create([
    'customer' => $customer->id,
    'amount'   => $amount,
    'currency' => 'cad',
]);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $config['DOMAIN_ROOT'] . "/api/?action=add_transactions&token=$token&email=$email&amount=$amount&customerid=" . $customer['id']);
$response = curl_exec($curl);
curl_close($curl);

echo $customer;