<?php
include "../functions/deposit.func.php";
require "dbh.inc.php";
session_start();

$ammount = intval(htmlspecialchars($_POST['amount']));
$period = intval(htmlspecialchars($_POST['period']));
$profit = 0;
if ($period <= 30) {$profit = 2;}
elseif ($period <= 91) {$profit = 3;}
elseif ($period >= 365) {$profit = 5;}

require "refresh.inc.php";


if ($_SESSION['balance'] >= 0) {

    $sql = "SELECT * FROM loan WHERE loaner='{$_SESSION['uidUsers']}'";
    $pdo->query($sql);
    
    if ($result) {

    
        if (checkCreditScore($result) == true) {

            $today = date("Y-m-d");
            $loanDue = date("Y-m-d", strtotime($today . " +$period days"));

            $sql = "INSERT INTO loan (loaner, amount, profit, loanDue) VALUES ('{$_SESSION['uidUsers']}', '{$ammount}', '{$profit}' ,'{$loanDue}')";
            $pdo->query($sql);


            echo "Loan granted.";
            deposit($pdo, $ammount, $_SESSION['uidUsers']);


        }
        else {
            echo "Unpaid loans.";
        }

    }

    else {
        deposit($pdo, $ammount, $_SESSION['uidUsers']);


        $today = date("Y-m-d");
        $loanDue = date("Y-m-d", strtotime($today . " +$period days"));
        $sql = "INSERT INTO loan (loaner, amount, profit, loanDue) VALUES ('{$_SESSION['uidUsers']}', '{$ammount}', '{$profit}' ,'{$loanDue}')";
        $pdo->query($sql);

        echo "Loan granted.";
        deposit($pdo, $ammount, $_SESSION['uidUsers']);


    }

}




else {
    echo "negative balance";
}



function checkCreditScore($result) {
    $loans = $result->fetchAll(PDO::FETCH_ASSOC); // Use fetchAll instead of fetch to get all rows
    foreach ($loans as $sloan) {
        if ($sloan['paid'] == false) { // Use array syntax to access column values
            return false;
        }
    }
    return true;
}

