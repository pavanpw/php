<?php

include_once('db_config.php');

$user_id = $_GET['id'];
if($user_id != NULL){
    $delet_query = mysqli_query($con,"DELETE FROM users WHERE id=$user_id");
    if($delet_query){
        header("location: fetch.php");
    }
    else{
        echo "Error In deleting User record";
    }
}else{
    echo "Invalid URL / Invalid user Id";
}


?>