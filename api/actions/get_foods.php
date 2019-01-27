<?php
//test.com/api/food?category=bread

//Check if there is a category
$categorySearch = (isset($_GET['category']) && !empty($_GET['category'])) ? $_GET['category'] : false;

$pdo = createPDO();

//http://localhost/Food4Kids-Store/api/?action=get_foods&category=Produce
if(!$categorySearch) {  
   // Category is empty
   $sql = "SELECT * FROM food";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([]);
}
else{
   // Category isn't empty
   $sql = "SELECT * FROM food WHERE category = ?";
   $stmt = $pdo->prepare($sql);
   $stmt->execute([$categorySearch]);
}

 //declare an array
 $foodinfoArray = array();
$is_results = false;

 foreach($stmt as $row) {
    $is_results = true;
    $formattedPrice = "$" . number_format(($row['price']/100), 2, ".", " ");
    $foodinfoArray[$row['food']] = ["id" => $row['id'],"food" => $row['food'], "category" => $row['category'],"price" => $row['price'], "formattedPrice" => $formattedPrice];
    }

if($is_results) {
   returnJSON(true, $foodinfoArray);
} else {
   returnResponse(false, "Category not found.");
}