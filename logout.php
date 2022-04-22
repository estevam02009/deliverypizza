<?php

ini_set('display_errors', 1);
    error_reporting(E_ALL);
include 'databaseconnect.php';

session_start();
session_unset();
session_destroy();

header('location:admin_login.php');

?>