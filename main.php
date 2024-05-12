<?php
include "templates/header.php" 
?>

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



</style>

<body>
    <header>
        <h1>Account Overview</h1>
    </header>

    <?php  /* var_dump($_SESSION) */  ?>


    <div class="container">
        <h2>Account Information</h2>
        <p><strong>Account Number:</strong> <?php echo $_SESSION['uidUsers']; ?></p>
        <p><strong>Account Type:</strong> Savings</p>
        <p><strong>Balance:</strong> $<?php echo $_SESSION['balance']; ?></p>

        <h2>Recent Transactions</h2>
        <table class="table">
            <thead>
                <th>Date</th>
                <th>Description</th>
                <th>Amount</th>
            </thead>

            <tbody>

            <?php
                require "includes/dbh.inc.php";
                $sql = "SELECT * FROM trans WHERE fromacc = '{$_SESSION['uidUsers']}' OR toacc = '{$_SESSION['uidUsers']}' ORDER BY id DESC LIMIT 5";
                $result = $pdo->query($sql);

                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        /* date */
                        echo '<td>' . $row['timestmp'];


                        /* desc */
                        if ($row['toacc'] == $_SESSION['uidUsers']) 
                        {echo "<td>{$row['fromacc']} sent \${$row['ammount']}</td>";}
                    else 
                        {echo "<td>you sent \${$row['ammount']} to {$row['toacc']} </td>";
                        }
                        /* amount */


                        echo '<td>' . "$" . $row['ammount'] . '</td>';
                        echo '</tr>';
                    }
                }
            ?>


            </tbody>
            <!-- <tr>
                <td>2024-05-15</td>
                <td>Deposit</td>
                <td>$1000.00</td>
            </tr>
            <tr>
                <td>2024-05-14</td>
                <td>Withdrawal</td>
                <td>-$200.00</td>
            </tr> -->
            <!-- Add more transaction rows as needed -->
        </table>

        <a href="transfer.php" class="btn btn-primary">Transfer Money</a>

    </div>

</body>
</html>
