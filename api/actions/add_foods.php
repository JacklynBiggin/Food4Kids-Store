<?php

$id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : false;

if(!$id) {
    returnResponse(false, "No id provided");
}

$food = (isset($_GET['food']) && !empty($_GET['food'])) ? $_GET['food'] : false;

if(!$food) {
    returnResponse(false, "No food provided");
}

$category = (isset($_GET['category']) && !empty($_GET['category'])) ? $_GET['category'] : false;

if(!$category) {
    returnResponse(false, "No category provided");
}

$price = (isset($_GET['price']) && !empty($_GET['price'])) ? $_GET['price'] : false;

if(!$price) {
    returnResponse(false, "No price provided");
}

 $pdo = createPDO();
 $sql = "INSERT INTO food (id, food, category, price) VALUES (?, ?, ?, ?)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute($id, $food, $category, $price);