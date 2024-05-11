
<?php

if (isset($_POST['register_btn'])) {
        /* extract form inputs entry. */

    $name = strtolower($_POST['fname']) . " " . strtolower($_POST['fname']);
    $password = strtolower($_POST['pass']);  
    $email = strtolower($_POST['mail']);
    
    require "dbh.inc.php";
        /* create a SQL query to append an account instance into the database. */
    $sql = "INSERT INTO account (pwd, email) VALUES (:pwd,:email)";

    /* prevent SQL injection attacks by separating the SQL query from the data, ensuring that user input is protected. */
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':pwd', $password);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    header('Location: ../index.php');

}

else {
    header('Location: ../index.php');
    die();
}