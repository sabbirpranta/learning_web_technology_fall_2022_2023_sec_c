<?php
session_start();

require_once "../models/Accounts_model.php";

$username = $_POST['username'];
$password = $_POST['password'];


$user = ['username' => $username, 'password' => $password];

$status = accountslogin($user);

if ($username == "" || $password == "") {
    header('location: ../views/login.php?err=null&&msg=abc');
} else if ($status) {
    $_SESSION['valid'] = 'true';
    $_SESSION['username'] = $username;
    header('location:../views/accounts/accounts_home.php');

} else {
    echo "invalid user accounts";
}




?>