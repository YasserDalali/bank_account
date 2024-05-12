<?php

require "dbh.inc.php";
session_start();
$accToSend = 5;
$ammount = 100;

$sql = "SELECT * FROM account WHERE accId='{$accToSend}'";
$result = $pdo->query($sql);


if ($result) {
    $accountBalance = $result->fetch(PDO::FETCH_ASSOC);
    $accountBalance = $accountBalance['balance'];

    if ($ammount <= $accountBalance && $ammount > 0) {

        $sql = "UPDATE account  SET balance = (balance-{$ammount})  WHERE accId='{$_SESSION['uidUsers']}'";
        $result = $pdo->query($sql);

        $sql = "UPDATE account  SET balance = (balance+{$ammount})  WHERE accId='{$accToSend}'";
        $result = $pdo->query($sql);
   
        $sql = "INSERT INTO trans (ammount, fromacc, toacc) VALUES ({$ammount}, {$_SESSION['uidUsers']}, {$accToSend})";
        $result = $pdo->query($sql);
    

        echo "Transaction successful";
        header('Location: ../main.php');


    }

    else {
        echo "Insufficient funds";
        header('Location: ../main.php');

    }

}


else {
    echo "account unfound";
    header('Location: ../main.php');

}
