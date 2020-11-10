<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<?php include_once('./navbar.php'); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form class="myform" action="./server.php" method="POST">
                    <h2>Login Form</h2>
                    <input type="text" name="uname" class="uname form-control" placeholder="UserName">
                    <input type="email" name="uemail" class="upass form-control" placeholder="Email Id">
                    <input type="tel" name="umobile" class="upass form-control" placeholder="Mobile Number">
                    <input type="submit" value="Login" name="submit" class="btn btn-primary login_btn" id="myloginbtn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>