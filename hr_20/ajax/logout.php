<?php

include_once('session_check.php');
session_unset();
header('location: login.php');

?>