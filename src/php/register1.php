<?php
    if(isset($_POST['submitBtn'])){
        echo "<h2>Bellow is the form data</h2>";
        echo "<br>";
        echo "Full Name: ".$_POST["full_name"];
        echo "<br>";
        echo "National Identity Card No: ".$_POST["nic"];
        echo "<br>";
        echo "Contact Number: ".$_POST["tel"];
        echo "<br>";
        echo "Email: ".$_POST["email"];
        echo "<br>";
        echo "District: ".$_POST["district"];
        echo "<br>";
        echo "Password: ".$_POST["cnfrmpw"];
        echo "<br><br>";
    }

    require 'config.php';

    if(isset($_POST["submitBtn"])){
        $fname = $_POST["full_name"];
        $NIC = $_POST["nic"];
        $TEL = $_POST["tel"];
        $Email = $_POST["email"];
        $DISTRICT = $_POST["district"];
        $pw = $_POST["cnfrmpw"];

        $sql = "INSERT INTO jobseeker(full_name,NIC,Telephone,email,district,Pass_word)VALUES('$fname','$NIC','$TEL','$Email','$DISTRICT','$pw')";
            if($con->query($sql)){
                echo "Inserted successfully";
            }
            else{
                echo "Error ".$con->error;
                
            }
    }
    $con->close();
?>