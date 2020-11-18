<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php

include_once('db_config.php');
include_once('navbar.php');



$edit_id = $_GET['id'];
if($edit_id != NULL){
    $fetch_query = mysqli_query($con,"select * from users where id=$edit_id");
    $query_rows = mysqli_num_rows($fetch_query);
    if($query_rows>0){
       $row =  mysqli_fetch_array($fetch_query);
       echo '<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="myform" action="./edit_data.php?id='.$edit_id.'" method="POST">
                    <h2>Login Form</h2>
                    <input type="text" name="uname" class="uname form-control" placeholder="UserName" value ="'.$row['name'].'">
                    <input type="email" name="uemail" class="upass form-control" placeholder="Email Id" value ="'.$row['email'].'">
                    <input type="tel" name="umobile" class="upass form-control" placeholder="Mobile Number" value ="'.$row['mobile'].'">
                    <input type="submit" value="Login" name="submit" class="btn btn-primary login_btn" id="myloginbtn">
                </form>
            </div>
        </div>
    </div>';
    }else{
        echo "Invalid User selection";
    }
}else{
    echo "Invalid URL";
}


?>
    
</body>
</html>

