<?php

$dbh_username = 'root';
$dbh_password = '';
$dbh_hostname = 'localhost';
$dbh_database = 'bank_account';

try {
    $cnx = new PDO("mysql:host=$dbh_hostname;dbname=$db_database;", $dbh_username, $dbh_password);

    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $ex) {
    die("Connection Failed: " . $ex->getMessage());
}