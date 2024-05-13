<?php
        function deposit($pdo, $ammount, $accToSend) {
            $sql = "SELECT * FROM account WHERE accId='{$accToSend}'";
        $result = $pdo->query($sql);
        
        if ($result) {
            $temp = $result->fetch(PDO::FETCH_ASSOC);
        
        
                $sql = "UPDATE account  SET balance = (balance+{$ammount})  WHERE accId='{$accToSend}'";
                $result = $pdo->query($sql);
        
                $sql = "INSERT INTO trans (ammount, fromacc, toacc) VALUES ('{$ammount}', 'Central Bank', 
                '{$accToSend}')";
                $result = $pdo->query($sql);
        
        
                echo "Transaction successful";
        
        
        
                require "refresh.inc.php";
        
        
        
                $temp = $ammount <= $accountBalance;
                echo  "<hr>" . $accountBalance . "-{$ammount} = {$temp}" . "<hr>";
        
                var_dump($_SESSION);
        
                header("Location: ../main.php");
            } else {
                echo "Insufficient funds";
            }
        
        }
    