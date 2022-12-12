<?php
require_once('db.php');

function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into User values('{$user['ID']}' ,'{$user['NAME']}', '{$user['EMAIL']}', '{$user['USER TYPE']}','{$user['USERNAME']}', '{$user['PASS']}' ,  '{$user['CONFIRM_PASS']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function deleteUser($user)
{
    // $con = getConnection();
    // $sql = "DELETE FROM students WHERE Id={$student_id}";
    // $status = mysqli_query($con, $sql);
    // return $status;
}
function editUser($user)
{
    $con = getConnection();
    $sql = "UPDATE  User SET ('{$user['ID']}' ,'{$user['NAME']}', '{$user['EMAIL']}', '{$user['USER TYPE']}','{$user['USERNAME']}', '{$user['PASS']}' ,  '{$user['CONFIRM_PASS']}')";

    $status = mysqli_query($con, $sql);
    return $status;
}
function searchUserById($id)
{
    $con = getConnection();

}
function allUser($id)
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

function userinfo($id)
{
    $con = getConnection();
    $sql = "select * from Student_model where id = '?'";
    $result = mysqli_query($con, $sql);
    // $user = mysqli_fetch_assoc($result);
    // header('location:student_check_info.php');
}
function fetch($id)
{

}
function login($user)
{
    $con = getConnection();
    $sql = "select * from User where username='{$user['NAME']}' and password='{$user['PASS']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);



    if ($user != null) {
        $_SESSION['user'] = $user;
        return $_SESSION['user'];
    } else {
        return false;
    }
}
function ForgotPass($UserName, $Email, $Password)
{
    $con = getConnection();
    $sql = "UPDATE User SET Password =  '{$PASS}' WHERE Email = '{$EMAIL}' and UserName = '{$USERNAME}'";
    $result = mysqli_query($con, $sql);
    return true;
}
function getuserdata($user)
{
    $con = getConnection();
    $sql = "select * from User where id='{$user['ID']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function showUser($id)
{
    $conn = getConnection();
    $selectQuery = "SELECT * FROM User where ID = $id";


}
?>