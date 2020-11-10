<?php


if(isset($_POST['submit'])){
    inserData();
}

function inserData(){
    include_once('db_config.php');
    $name = $_POST['uname'];
    $mobile = $_POST['umobile'];
    $email = $_POST['uemail'];
    
    $ins_query = mysqli_query($con, "INSERT INTO users (name, mobile, email) VALUES ('$name','$mobile','$email')");
    
    if($ins_query){
        echo "Data Inserted";
    }
}






?>