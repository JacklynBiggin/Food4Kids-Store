<?php


// Check if action is set
$action = (isset($_GET['action']) && !empty($_GET['action'])) ? $_GET['action'] : false;

if(!$action) {
    echo "No action provided";
    return false;
}

// Check if action exists
if(!file_exists("./actions/" . $action . ".php")) {
    echo "Action doesnt exist";
    return false;
}

// If it does, run action
require_once "./actions/"  . $action . ".php";