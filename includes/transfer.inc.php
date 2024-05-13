<?php

require "dbh.inc.php";
include "../functions/transfer.func.php";

session_start();
$accToSend = htmlspecialchars($_POST['accto']);
$ammount = htmlspecialchars($_POST['ammount']);
$accountBalance = 0;

transfer($pdo, $ammount, $accToSend);
