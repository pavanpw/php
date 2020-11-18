<?php


if(isset($_POST['submit'])){
    inserData();
}


function inserData(){
    $edit_id = $_GET['id'];
    include_once('db_config.php');
    $name = $_POST['uname'];
    $mobile = $_POST['umobile'];
    $email = $_POST['uemail'];
    
    $ins_query = mysqli_query($con, "UPDATE users
    SET name = '$name', email= '$email', mobile= '$mobile'
    WHERE id = $edit_id");
    
    if($ins_query){
        header("location: fetch.php");
    }
}






?>