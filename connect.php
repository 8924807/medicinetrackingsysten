<?php
    $con = mysqli_connect("localhost", "root", "", "pharmacy");

    if(!$con){
        echo "<h1>CONNECTION UNSUCCESSFUL</h1>";
        die();
    }
?>