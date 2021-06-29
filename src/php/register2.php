<?php
    if(isset($_POST['submitButton'])){
        echo "<h2>Bellow is the form data</h2>";
        echo "<br>";
        echo "Fisrt Name: ".$_POST["firstname"];
        echo "<br>";
        echo "Last Name: ".$_POST["lastname"];
        echo "<br>";
        echo "Company Name: ".$_POST["company"];
        echo "<br>";
        echo "Natinal Identity Card No: ".$_POST["nic"];
        echo "<br>";
        echo "Telephone: ".$_POST["tel"];
        echo "<br>";
        echo "Email: ".$_POST["email"];
        echo "<br>";
        echo "District: ".$_POST["district"];
        echo "<br>";
        echo "City: ".$_POST["city"];
        echo "<br>";
        echo "Postal Code: ".$_POST["code"];
        echo "<br>";
        echo "Password: ".$_POST["pws2"];
        echo "<br><br>";
    }
    require 'config.php';

    if(isset($_POST["submitButton"])){
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $company = $_POST["company"];
        $NIC = $_POST["nic"];
        $TEL = $_POST["tel"];
        $Email = $_POST["email"];
        $DISTRICT = $_POST["district"];
        $CITY = $_POST["city"];
        $CODE = $_POST["code"];
        $pw = $_POST["pws2"];

        $sql = "INSERT INTO employer(fname,lname,company_name,NIC,Tel_num,email,District,City,postal_code,Pass_word)VALUES('$fname','$lname','$company','$NIC','$TEL','$Email','$DISTRICT','$CITY','$CODE','$pw')";
            if($con->query($sql)){
                echo "Inserted successfully";
            }
            /*if ($con->query($sql) === TRUE) {
            header('Location: #');
        } 
        */
            else{
                echo "Error ".$con->error;
            }
    }
    $con->close();

?>