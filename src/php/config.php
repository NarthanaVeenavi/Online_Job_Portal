<?php
    $con = new mysqli("localhost","root","","mydatabase");
        if($con->connect_error){
            die("Connection failed: ".$con->connect_error);
        }
?>