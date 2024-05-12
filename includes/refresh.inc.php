<?php

    require "dbh.inc.php";

    

        // Prepare the SQL query
        $sql = "SELECT * FROM account WHERE accId = :userId";

        $stmt = $pdo->prepare($sql);
        // Bind parameters
        $stmt->bindParam(':userId', $_SESSION['uidUsers']);

        // Execute the statement
        $stmt->execute();
        $row = $stmt->fetch();

        // Check if a row was found
        if ($row) {
            // Update session variables
            $_SESSION['balance'] = $row['balance'];
        }

    