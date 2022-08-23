<?php

session_start();

if(isset($_SESSION['username'])){
    $_SESSION["loggedin"] = false;
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}