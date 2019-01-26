<?php


// Check if action is set
$action = (isset($_GET['action']) && !empty($_GET['action'])) ? $_GET['action'] : false;

if(!$action) {
    return false;
}

// Check if action exists
if(!file_exists("./actions/" . $action . ".php")) {
    return false;
}

// If it does, run action
require_once "./actions/"  . $action . ".php";