<!DOCTYPE html>
<html lang="en">

<?php
require "templates/header.php";

if (isset($_SESSION['uidUser'])) {
    require('main.php')
}

?>

</html>
