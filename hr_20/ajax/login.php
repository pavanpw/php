<?php
session_start();
if(isset($_SESSION['user_status'])){
  if($_SESSION['user_status'] == "loggedin"){
    header("location: index.php");
  }
  
}

?>

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
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h2>Create Account</h2>
                <form class="reg_form">
                    <div class="form-group">                      
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
            </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h2>Login Account</h2>
              <form class="login_form">
                  <div class="form-group">                      
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="lemail">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="lpwd">
                  </div>
                  <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-default">Login</button>
                </form>
          </div>
      </div>
    </div>
    <div class="not_msg">
  
    </div>

    <script src="script.js"></script>
</body>
</html>