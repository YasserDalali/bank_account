<?php
require_once "config_session.inc.php";
require "dbh.inc.php";
/* 
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="username / email">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="login-submit">Login</button>

*/


if (isset($_POST['login-submit'])) { 

    $usermail = htmlspecialchars($_POST['userID']);
    $password = htmlspecialchars($_POST['userPwd']);

    if (!empty($usermail) AND !empty($password))

{
// Prepare the SQL query
$sql = "SELECT * FROM account WHERE email = :reda1   AND pwd = :reda2";

// Hash user password
$stmt = $pdo->prepare($sql);
// Bind parameters
$stmt->bindParam(':reda1', $usermail);
$stmt->bindParam(':reda2', $password);

// Execute the statement
$stmt->execute();
$row = $stmt->fetch();

// Check if a row was found
if ($row) {
    // Fetch the result
    
    session_start();

    // Store the user ID in the session
    $_SESSION['balance'] = $row['balance'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['uidUsers'] = $row['accId'];


    
    
    header("Location: ../main.php");

    $pdo = $stmt = null;
}

else {
    header("Location: ../index.php");
}

    
}
}
 else {
    header("Location: ../index.php");
    exit();
 }

