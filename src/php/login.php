<?php
    require 'config.php';
    if(isset($_POST["submitButton"])){
        $email = $_POST["email"];
        $password = $_POST["loginpw"];

        $email = stripcslashes($email);
        $password = stripcslashes($password);

        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);

        $result = mysqli_query($con, "select * from employer where email = '$email' and Pass_word = '$password'")
                    or die ("Fail to login to the Premier.!!! ".mysqli_error($con));
        $row = mysqli_fetch_array($result);
        if($row['email'] == $email && $row['Pass_word'] == $password){
            echo "Login Success!!!. Welcome!" .$row['email'];
            //$result1 = mysqli_query($result,$con);
            //header("../AboutUs.html");
            //header("../php/login.php");
        }            
        else{
            echo "Failed to login";
        }
    }
?>
