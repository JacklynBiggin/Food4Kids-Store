<?php

 $pdo = createPDO();
 $sql = "SELECT * FROM example WHERE name = ?";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$client_id, $client_secret]);
 
 foreach($stmt as $row) {
    echo $row['food'];
 }