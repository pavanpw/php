<?php
session_start();
  if($_SESSION['user_status'] != "loggedin"){
    header("location: login.php");
  }

?>