<?php
//require_once __DIR__ . "/requires/config.php";
require_once __DIR__ . "/requires/functions.php";


// Check if action is set
$action = (isset($_GET['action']) && !empty($_GET['action'])) ? $_GET['action'] : false;

if(!$action) {
    returnResponse(false, "No action provided");
}

// Check if action exists
if(!file_exists("./actions/" . $action . ".php")) {
    returnResponse(false, "That action doesn&apos;t exist.");
}

// If it does, run action
require_once "./actions/"  . $action . ".php";