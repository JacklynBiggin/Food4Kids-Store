<?php

require __DIR__ . '/../../vendor/autoload.php';
$config = require_once __DIR__ . '/../requires/config.php';
\Stripe\Stripe::setApiKey("sk_test_fJh8VXj0tMHbp4QdyVorSIXv");

$token  = $_POST['token'];
$email  = $_POST['email'];
$amount = $_POST['amount'];
$arguments = $_POST['arguments'];


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
curl_setopt($curl, CURLOPT_URL, "http://e8ad3736.ngrok.io/Food4Kids-Store/api/?action=add_transactions&token=$token&email=$email&amount=$amount&customerid=" . $customer['id']);
echo curl_exec($curl);
curl_close($curl);

var_dump ($arguments);