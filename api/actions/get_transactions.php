<?php

 $pdo = createPDO();
 $sql = "SELECT * FROM transactions";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([]);

 //declare array
 $transinfoArray = array();

 foreach($stmt as $row) {
    $transinfoArray[$row['id']] = ["id" => $row['id'],"email" => $row['email'],"firstname" => $row['firstname'], "lastname" => $row['lastname'], "customerid" => $row['customerid'], "timestamp" => $row['timestamp']];
}

//Return Json
returnJSON(true, $transinfoArray);