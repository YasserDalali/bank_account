<?php
require "templates/header.php";
if (isset($_SESSION['uidUser'])) header('Location: index.php');
?>



    <form class="container needs-validation" novalidate method="POST" action="includes/register.inc.php">


        <div class="form-row my-4">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">First name</label>
                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" required name="fname">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3 my-4">
                <label for="validationTooltip02">Last name</label>
                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" required name="lname">
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3 my-4">
                <label for="validationTooltipUsername">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="email" aria-describedby="validationTooltipUsernamePrepend" required name="mail">
                    <div class="invalid-tooltip">
                        Please choose a unique and valid email.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3 my-4">
            <label for="validationTooltip05">Password</label>
            <input type="password" class="form-control" id="validationTooltip05" placeholder="Password" required name="pass">
            <div class="invalid-tooltip">
                Please provide a valid password.
            </div>

            <label for="validationTooltip05">Repeat Password</label>
            <input type="password" class="form-control" id="validationTooltip05" placeholder="Password" required>
            <div class="invalid-tooltip">
                Please provide the same password.
            </div>


        </div>
        </div>
        <button class="btn btn-primary" type="submit" name="register_btn">Register</button>
    </form>
    <?php include "templates/footer.php" ?>
