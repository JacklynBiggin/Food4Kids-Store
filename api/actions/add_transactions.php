<?php

//The three parameters to add to the table (id and timestamp should be automatic)
$email = (isset($_GET['email']) && !empty($_GET['email'])) ? $_GET['email'] : false;
$firstname = (isset($_GET['firstname']) && !empty($_GET['firstname'])) ? $_GET['firstname'] : false;
$lastname = (isset($_GET['lastname']) && !empty($_GET['lastname'])) ? $_GET['lastname'] : false;
$customerid = (isset($_GET['customerid']) && !empty($_GET['customerid'])) ? $_GET['customerid'] : false;

 $pdo = createPDO();
 $sql = "INSERT INTO transactions (email, firstname, lastname, customerid) VALUES (?,?,?,?)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute([$email, $firstname, $lastname, $customerid]);

//Test to add to table:
//localhost/Food4Kids-Store/api/?action=add_transaction&email=dquan@uwo.ca&firstname=david&lastname=quan&customerid=ch_1Dx9nIEG178pfWT2iTx9Yehx

//Not sure how to check if its been added

//Print that it was added
echo "It was successfully added to the table";