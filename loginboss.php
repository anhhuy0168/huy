<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
    if ($username == 'boss' && $password == '123') {
        header("location:boss1.php");
    } 
else
    {
        echo "incorrect username and password";
        require "login.html";
    }
?>
