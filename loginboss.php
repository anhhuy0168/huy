<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' && $password == '123') {
    header("location:boss.php");
}
    else
    {
        echo "incorrect username and password";
        require "login.html";
    }
?>
