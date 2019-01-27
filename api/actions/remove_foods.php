<?php

$id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : false;

if(!$id) {
    returnResponse(false, "No id provided");
}

 $pdo = createPDO();
 $sql = "DELETE FROM foods WHERE id = ?";
 $stmt = $pdo->prepare($sql);
 $stmt->execute($id);