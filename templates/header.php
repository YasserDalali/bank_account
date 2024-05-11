<?php 
// DATABASE CONNECTION AND SECURING:
require "includes/config_session.inc.php";
?>
<!-- EXTERNAL STYLE LINKS: -->


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="design/style.css">



<!-- HEADER: -->
<?php 
if (isset($_SESSION['userId'])) {
    echo '<nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://seeklogo.com/images/E/emblem-of-yamamoto-miyagi-logo-3BB0AAE301-seeklogo.com.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Atlabank
      </a>
      <form class="form-inline" method="POST">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </nav>';
}
else {
    echo '<nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://seeklogo.com/images/E/emblem-of-yamamoto-miyagi-logo-3BB0AAE301-seeklogo.com.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Atlabank
      </a>
      <DIV>
      <form class="form-inline" method="POST">
        <input class="form-control mr-sm-2" type="text" 
            name="userID"
         placeholder="username/email" >
    
    
        <input class="form-control mr-sm-2" type="password"
            name="userPwd"
        placeholder="password" >
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button>
      
            
      </form>
      <small>Don\'t have an account? <a href="register.php">Sign up</a></small>
      </DIV>
    </nav>'; 
}
?>




