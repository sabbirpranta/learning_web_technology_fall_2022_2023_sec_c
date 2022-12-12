<?php
session_start();

if (isset($_POST['submit'])) {


    require('../models/Student_model.php');
    $id = $_POST['id'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    @$confirmpassword = $_POST['confirmpassword'];
    setcookie('uname', $firstname, time() + 60 * 60 * 24 * 10, '/');
}
$flag = 0;
if (empty($firstname)) {
    header('location:signup.php?err1');
    $flag++;

} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
    header('location:signup.php?err2');
    $flag++;
} elseif ($username == "" || $password == "") {
    header('location: signup.php?err');
    $flag++;

} elseif (!preg_match("/[a-z][^a-z]*[a-z]/i", $username)) {
    header('location: signup.php?err12');
    $flag++;

} elseif (empty($gender)) {
    header('location: signup.php?err3');
    $flag++;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('location: signup.php?err4');
    $flag++;
} elseif (empty($phoneno)) {
    header('location: signup.php?err5');
    $flag++;
} elseif (!preg_match('/^\d+$/', $phoneno)) {
    header('location: signup.php?err6');
    $flag++;
} elseif (strlen($phoneno) != 11) {
    header('location: signup.php?err7');

    $flag++;
} elseif (empty($address)) {
    header('location: signup.php?err8');
    $flag++;
} elseif ($password != $_POST['Confirmpassword']) {
    header('location: signup.php?err9');
    $flag++;
} elseif (strlen($password) > 8) {
    header('location: signup.php?err10');
    $flag++;
} else {
    $user = ['id' => $id, 'firstname' => $firstname, 'lastname' => $lastname, 'phoneno' => $phoneno, 'email' => $email, 'gender' => $gender, 'address' => $address, 'username' => $username, 'password' => $password, 'confirmpassword' => $confirmpassword];
    $status = insertUser($user);
    if ($status) {
        $_SESSION['username'] = $username;
        header('location: ../views/Login.php');
    } else {
        echo "DB insert error!";
    }
}


?>