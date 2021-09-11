<?php

include_once "./../DataBase/Data.php";

$username = $_POST["username"];
$password = $_POST["password"];

$id_user = $data->LoginCheck("$username", "$password");

if (!is_null($id_user)) {
    header("Location: http://localhost:63342/Lab_dev/PROJECT/Page/views/Home.php");
} else {
include_once './../views_models/header.php' ;
    echo "<h1>Login isn`t correct</h1><br> Input Username: " . $username . "<br> Input Password: " . $password."<br>";
    echo "<button onclick='location.href=`./../views/Login.php`'>Try Again</button>";
}