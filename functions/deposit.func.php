<?php
        function deposit($pdo, $ammount, $accToSend) {
            $sql = "SELECT * FROM account WHERE accId='{$accToSend}'";
        $result = $pdo->query($sql);
        
        if ($result) {        
        
                $sql = "UPDATE account SET balance = (balance+{$ammount})  WHERE accId='{$accToSend}'";
                $result = $pdo->query($sql);
        
                $sql = "INSERT INTO trans (ammount, fromacc, toacc) VALUES ('{$ammount}', 2, 
                '{$accToSend}')";
                $result = $pdo->query($sql);

                echo "DEPOSIT successful";
        
        
        
                require "refresh.inc.php";
                header("Location: ../main.php");

            } 
            
            else {
                echo "Unfound user";
            }
        
        }
    