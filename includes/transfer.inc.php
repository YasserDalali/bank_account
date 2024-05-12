<?php

require "dbh.inc.php";
session_start();
$accToSend = 3;
$ammount = 3000;
$accountBalance = 0;

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



        require "refresh.inc.php";
        
        

        $temp = $ammount <= $accountBalance;
        echo  "<hr>" . $accountBalance . "-{$ammount} = {$temp}" . "<hr>"; 

        var_dump($_SESSION);

/*         header("Location: ../main.php");
 */

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
