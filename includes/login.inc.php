<?php
require "dbh.inc.php";
/* 
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="username / email">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="login-submit">Login</button>

*/


if (isset($_POST['login-submit'])) { 
    $usermail = $_POST['userID'];
    $password = $_POST['userPwd'];


// Prepare the SQL query
$sql = "SELECT accId FROM account WHERE email = :email AND pwd = :password";
$stmt = $pdo->prepare($sql);

// Bind parameters
$stmt->bindParam(':email', $usermail);
$stmt->bindParam(':password', $password);

// Execute the statement
$stmt->execute();

// Check if a row was found
if ($stmt->rowCount() === 1) {
    // Fetch the result
    $row = $stmt->fetch();
    
    session_start();

    // Store the user ID in the session
    $_SESSION['uidUsers'] = $row['accId'];
    
    
    header("Location: ../index.php");
}

    
}

 else {
    header("Location: ../index.php");
    exit();
 }