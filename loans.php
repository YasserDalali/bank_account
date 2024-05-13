<?php include "templates/header.php" ?>

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
            <input type="number" class="form-control" min="1000" name="amount" id="" required aria-describedby="helpId" placeholder="$0.00">

            <label class="form-check-label mt-4">Payment period:</label>

            <div class="form-check mb-4">
                
                    <input type="radio" class="form-check-input" name="period" id="" value="30" checked>
                    30 Days (by month)
                    <br>
                    <input type="radio" class="form-check-input" name="period" id="" value="91">
                    91 Days (by trimester)
                    <br>
                    <input type="radio" class="form-check-input" name="period" id="" value="365">
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
</div>


<?php include "templates/footer.php" ?>