<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
    if ($username == 'staff' && $password == '123') {
        header("location:staff.html");
    } elseif ($username == 'boss' && $password == '123') {
        header("location:boss.html");
    } else
    {
        echo "incorrect username and password";
        require "login.html";
    }
?>