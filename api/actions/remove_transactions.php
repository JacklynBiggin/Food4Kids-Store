<?php

//To remove the whole row, use the primary key as its unique
$id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : false;

 $pdo = createPDO();
 $sql = "DELETE FROM transactions WHERE id = ? ";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$id]);

//Test to remove to table:
//localhost/Food4Kids-Store/api/?action=add_transactions&id=10

//Print that it was added
echo "It was removed added to the table";