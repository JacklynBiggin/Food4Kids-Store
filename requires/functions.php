<?php
$config = require_once __DIR__ . "/../api/requires/config.php";

function getAPIdata($url){
    global $config;
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here

    $path = $config['DOMAIN_ROOT'] . '/api/?' . $url;

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $path
    ));

    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);

    $resp = str_replace('"success":true,', "", $resp);
    return json_decode($resp, true);
}