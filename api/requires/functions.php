<?php

$config = require __DIR__ . "./config.php";


function createPDO() {
    global $config;
    $dsn = "mysql:host=" . $config['DB_SERVER'] . ";dbname=" . $config['DB_DATABASE'] . ";charset=utf8mb4";
	$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    
	return new PDO($dsn, $config['DB_USER'], $config['DB_PASSWORD'], $opt);
}
function returnResponse($success, $message = null) {
    header('Content-Type: application/json');
    if(!$success) {
        http_response_code(400);
    }
    echo json_encode(['success' => $success, 'message' => $message]);
    die();
}
function returnJSON($success, $array) {
    header('Content-Type: application/json');
    if(!$success) {
        http_response_code(400);
    }
    
    $return = array_merge(['success' => $success], $array);
    echo json_encode($return);
    die();
}