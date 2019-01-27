<?php

$id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : false;

if(!$id) {
    returnResponse(false, "No id provided");
}

 $pdo = createPDO();
 $sql = "SELECT * FROM transactions WHERE ? limit 1";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$id]);

 foreach($stmt as $row) {
    returnJSON(true, [$row['id']] = ["id" => $row['id'],"email" => $row['email'],"firstname" => $row['firstname'], "lastname" => $row['lastname'], "customerid" => $row['customerid'], "timestamp" => $row['timestamp']]);
}