<?php
// Database connection
$con = mysqli_connect("localhost","root","","hrui_20");

if($_POST['type'] == "insert_data"){
    // Name
    $name = $_POST['name'];
    // Email
    $email = $_POST['email'];
    // Mobile
    $mobile = $_POST['mobile'];
    // Password
    $pass = $_POST['password'];

    $insert_query = mysqli_query($con,"insert into users(name,mobile,email,password) values('$name','$email','$mobile','$pass')");

    if($insert_query){
        echo "Data inserted";
    }

}


if($_POST['type'] == "get_ser_data"){
    $get_query = mysqli_query($con,"select * from users");
    // to check num of rows from db
    $num_rows = mysqli_num_rows($get_query);
    $data_array = array();
    if($num_rows>0){
        while($row = mysqli_fetch_assoc($get_query)){
            $data_array['mydata'][] = $row;
        }
        echo json_encode($data_array);
    }else{
        echo "No Data";
    }
}

if($_POST['type'] == "delete_rec"){
    $del_id = $_POST['delete_id'];
    $del_query = mysqli_query($con,"delete from users where id=$del_id");
    if($del_query){
        echo "data deleted";
    }

}



?>