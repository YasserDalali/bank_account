<?php

$dbh_username = 'root';
$dbh_password = '';
$dbh_hostname = 'localhost';
$dbh_database = 'bank_account';


try {
    $pdo = new PDO("mysql:host=$dbh_hostname;dbname=$dbh_database;", $dbh_username, $dbh_password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);: This line sets the error mode attribute of the PDO object to ERRMODE_EXCEPTION, which means that PDO will throw exceptions for errors instead of just returning false. This makes it easier to handle errors in the code. */



} catch (PDOException $ex) {
    die("Connection Failed: " . $ex->getMessage());
}


