<?php
//How do we add a common db?
    $host = "localhost";
    $username = "host";
    $password = "";
    $dbname = "car_rental_db";

    $con = new mysqli ($host, $username, $password, $dbname);

    if($con->connect_error){
        die ("Connection error : " . $con->connect_error);
    }
?>
