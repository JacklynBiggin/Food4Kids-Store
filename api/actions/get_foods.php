<?php

 $pdo = createPDO();
 $sql = "SELECT * FROM food";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([]);

 //declare array
 $foodinfoArray = array();

 foreach($stmt as $row) {
    $formattedPrice = "$" . number_format(($row['price']/100), 2, ".", " ");
    $foodinfoArray[$row['food']] = ["id" => $row['id'],"food" => $row['food'], "category" => $row['category'],"price" => $row['price'], "formattedPrice" => $formattedPrice];
    //echo $formattedPrice;
   }

//Return Json
returnJSON(true, $foodinfoArray);