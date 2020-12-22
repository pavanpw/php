<?php
session_start();

$con = mysqli_connect("localhost","root","","hrui_20");

if($_POST['type']=="Auth_reg"){
    $email = $_POST['email'];
    $pass =  $_POST['password'];

    $check_query = mysqli_query($con,"select * from users where email='$email'");
    $num_rows =  mysqli_num_rows($check_query);
    if($num_rows > 0 ){
        echo "0"; // already if email exits
    }else{
        $ins_query = mysqli_query($con,"insert into users (email,password) values('$email','$pass')");
        if($ins_query){
            echo "1";
        }else{
            echo "00";
        }
    }

}


if($_POST['type']=="Auth_login"){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $check_query = mysqli_query($con,"select * from users where email='$email'");
    $num_rows = mysqli_num_rows($check_query);
    if($num_rows > 0){
        //Password check
        $row = mysqli_fetch_assoc($check_query);
        $db_pass = $row['password'];
        if($pass == $db_pass){
           echo "1"; // login success
           $_SESSION['user_status'] = "loggedin";
           $_SESSION['user_id'] = $row['id'];
           $_SESSION['user_name'] = $row['name'];
        }else{
            echo "00" ; // Passowrd not match
        }
    }else{
        echo "0"; // email not found
    }
}

?>