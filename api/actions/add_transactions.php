<?php

//The three parameters to add to the table (id and timestamp should be automatic)
$email = (isset($_GET['email']) && !empty($_GET['email'])) ? $_GET['email'] : false;
$fullname = (isset($_GET['fullname']) && !empty($_GET['fullname'])) ? $_GET['fullname'] : false;
$customerid = (isset($_GET['customerid']) && !empty($_GET['customerid'])) ? $_GET['customerid'] : false;

 $pdo = createPDO();
 $sql = "INSERT INTO transactions (email, fullname, customerid) VALUES (?,?,?)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$email, $fullname, $customerid]);

//Test to add to table:
//localhost/Food4Kids-Store/api/?action=add_transactions&email=dquan@uwo.ca&firstname=david&lastname=quan&customerid=ch_1Dx9nIEG178pfWT2iTx9Yehx

//Not sure how to check if its been added

//Print that it was added
echo "It was successfully added to the table";