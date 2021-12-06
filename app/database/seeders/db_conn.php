<?php

$sname= "localhost";

$unmae= "laravel";

$password = "password";

$db_name = "laravel";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>
