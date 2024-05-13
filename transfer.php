<?php require 'templates/header.php';
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
    <h1 class="title-atla">Transfer</h1>

  </div>
</div>
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
