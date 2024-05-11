<?php
include "templates/header.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Overview</title>
<style>


    header {
        background-color: #0d6efd;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }


    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</head>
<body>
    <header>
        <h1>Account Overview</h1>
    </header>
    <div class="container">
        <h2>Account Information</h2>
        <p><strong>Account Number:</strong> <?php echo $_SESSION['uidUser']; ?></p>
        <p><strong>Account Type:</strong> Savings</p>
        <p><strong>Balance:</strong> $5000.00</p>

        <h2>Recent Transactions</h2>
        <table class="table">
            <tr>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>2024-05-15</td>
                <td>Deposit</td>
                <td>$1000.00</td>
            </tr>
            <tr>
                <td>2024-05-14</td>
                <td>Withdrawal</td>
                <td>-$200.00</td>
            </tr>
            <!-- Add more transaction rows as needed -->
        </table>

        <a href="#" class="btn btn-primary">Transfer Money</a>
        <a href="#" class="btn btn-primary">Pay Bills</a>
        <a href="#" class="btn btn-primary">Logout</a>
    </div>
    <footer>
        <p>&copy; 2024 My Bank. All rights reserved.</p>
    </footer>
</body>
</html>
