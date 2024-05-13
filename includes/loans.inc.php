<?php

require "dbh.inc.php";
session_start();

$ammount = 5000;

$accountBalance = 0;
include "../functions/deposit.func.php";

require "refresh.inc.php";


if ($_SESSION['balance'] >= 0) {

    $sql = "SELECT * FROM loan WHERE loaner='{$_SESSION['uidUsers']}'";
    $result = $pdo->query($sql);
    
    if ($result) {

    
        if (checkCreditScore($result) == true) {
            deposit($pdo, $ammount, $_SESSION['uidUsers']);
            echo "Loan granted.";

        }
        else {
            echo "Unpaid loans.";
        }

    }

    else {
        deposit($pdo, $ammount, $_SESSION['uidUsers']);
        echo "Loan granted.";

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

