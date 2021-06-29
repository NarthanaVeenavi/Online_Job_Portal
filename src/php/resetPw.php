<?php
    require 'config.php';

    if(isset($_POST['reset'])){
        $pass = $_POST['psw2'];
        $email = $_POST['email'];

        if(mysqli_connect_errno()){
            echo "Failed to connect to Mysql: ". mysqli_connect_error();
        }
        $query = mysqli_query($con, "select * from employer where email = '$email'")
        or die(mysqli_error($con));

        if(mysqli_num_rows($query) == 1){
            $query3 = mysqli_query($con,"update employer set Pass_word = '$pass' where email = '$email'")
            or die(mysqli_error($con));

            echo "Password changed";
        }
        else{
            echo "Wrong code..";
        }
        $con->close();
    }
?>