<?php require 'templates/header.php'; ?>

<div class="container">
    <form method="post" action="includes/transfer.inc.php" class="form-group my-4">
        <label for="">Account to send to</label>
        <input type="text" class="form-control" name="accto" id="" aria-describedby="helpId" placeholder="">

        <label for="">Amount:</label>
        <input type="text" class="form-control" name="ammount" id="" aria-describedby="helpId" placeholder="$0.00">

        <button class="btn-primary btn my-4" type="submit">Transfer</button>
    </form>
</div>

<?php include "templates/footer.php" ?>
