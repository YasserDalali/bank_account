<?php
require "templates/header.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlabank | Register</title>
    <link rel="icon" href="https://seeklogo.com/images/E/emblem-of-yamamoto-miyagi-logo-3BB0AAE301-seeklogo.com.png" type="image/png">
</head>

<body>
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">First name</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Last name</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="email" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid email.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Password</label>
      <input type="password" class="form-control" id="validationTooltip05" placeholder="Password" required>
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
  <button class="btn btn-primary" type="submit">Submit form</button>
</form> 
</body>