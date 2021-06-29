<?php
    $target_dir = "uploads/";
    $target_file = $target_dir.($_FILES["uploadFile"]['name']);
    if(isset($_FILES["uploadFile"])){
        if(move_uploaded_file($_FILES["uploadFile"]["tmp_name"],$target_file)){
            echo "The file ". basename($_FILES["uploadFile"]["name"]). " is uploaded";
        }
        else if($_FILES["uploadFile"]["size"] > 500000){
            echo "Sorry, file is too large.";
        }
        else{
            echo "Error while uploading your file";
        }
    }
    else{
        echo "File not available";
    } 
?>