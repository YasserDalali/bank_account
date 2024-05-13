<?php include "templates/header.php";
if (!isset($_SESSION['uidUser'])) header('Location: index.php');
?>

<style>
    body {
        overflow-x: hidden;
    }

    .jumbotron {
        background-image: url('design/bg.jpg');
        background-size: cover;
        color: #fff;
        text-align: center;
        padding: 100px 20px;
        height: 20vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .title-atla {
        font-size: 10em;

    }
</style>

<div class="jumbotron">
    <div class="container">
        <h1 class="title-atla">Loans</h1>
    </div>
</div>

<form action="includes/loans.inc.php" method="post" class="container my-4">

    <div class="form-check">
        <label for="">Loan value:</label>
        <input type="number" class="form-control" min="1000" name="amount" id="loan-amount" value="1000" max="100000" required aria-describedby="helpId" placeholder="$0.00">
        <div id="fee-container"></div>

     


        <label class="form-check-label mt-4">Payment period:</label>

        <div class="form-check mb-4">

            <input type="radio" class="form-check-input" name="period" id="period-30" value="30" checked>
            30 Days (by month)
            <br>
            <input type="radio" class="form-check-input" name="period" id="period-91" value="91">
            91 Days (by trimester)
            <br>
            <input type="radio" class="form-check-input" name="period" id="period-365" value="365">
            365 Days (by year)
        </div>


        <label class="form-check-label ms-4 my-3">
            <input type="checkbox" required class="form-check-input" name="" id="" value="checkedValue" checked>
            <small>I agree to the <a href="">terms of services.</a>
            </small>
        </label>

        <br>

        <button type="submit" class="btn-primary btn my-4">
            Apply for a loan
        </button>
    </div>
</form>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const amountInput = document.getElementById('loan-amount');

        // Calculate fee on input click or change
        amountInput.addEventListener("click", calculateFee);
        amountInput.addEventListener("input", calculateFee);

        // Calculate fee on period change
        document.querySelectorAll('input[name="period"]').forEach((elem) => {
            elem.addEventListener("change", calculateFee);
        });
    });

    function calculateFee() {
        const amount = parseFloat(document.getElementById('loan-amount').value);
        const period = parseFloat(document.querySelector('input[name="period"]:checked').value);
        let fee = 0;

        if (period === 30) {
            fee = amount * 0.02;
        } else if (period === 91) {
            fee = amount * 0.03;
        } else if (period === 365) {
            fee = amount * 0.05;
        }

        document.getElementById('fee-container').innerHTML = `<p class="form-text text-muted">Fee: ${amount} + <b>$${fee.toFixed(2)}</b></p>`;
    }
</script>


<?php include "templates/footer.php" ?>
