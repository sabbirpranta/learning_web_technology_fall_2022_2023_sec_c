<?php
require_once('db.php');

function accountsinsertUser($user)
{
    $con = getConnection();
    $sql = "insert into accounts_model values('{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}','{$user['gender']}', '{$user['address']}','{$user['username']}', '{$user['password']}' ,  '{$user['confirmpassword']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function accountsdeleteUser($user)
{
    // $con = getConnection();
    // $sql = "DELETE FROM students WHERE Id={$student_id}";
    // $status = mysqli_query($con, $sql);
    // return $status;
}
function accountseditUser($user)
{
    $con = getConnection();
    $sql = "UPDATE  accounts_model SET ('{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}', '{$user['address']}','{$user['username']}'";

    $status = mysqli_query($con, $sql);
    return $status;
}
function accountssearchUserById($id)
{
    $con = getConnection();

}
function accountsallUser($id)
{
    $con = getConnection();

}

// function login($user)
// {
//     $con = getConnection();
//     $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
//     $result = mysqli_query($con, $sql);
//     $user = mysqli_fetch_assoc($result);

//     if ($user != null) {
//         return true;
//     } else {
//         return false;
//     }
// }

function accountsuserinfo($user)
{
    $con = getConnection();
    $sql = "select * from accounts_model";
    $result = mysqli_query($con, $sql);
    // $user = mysqli_fetch_assoc($result);
    // header('location:student_check_info.php');
}
function accountslogin($user)
{
    $con = getConnection();
    $sql = "select * from accounts_model where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);


    if ($user != null) {
        return true;
    } else {
        return false;
    }
}
function accountsforgotPass($UserName, $Email, $Password)
{
    $con = getConnection();
    $sql = "UPDATE accounts_model SET Password =  '{$Password}' WHERE Email = '{$Email}' and UserName = '{$UserName}'";
    $result = mysqli_query($con, $sql);
    return true;
}
?>