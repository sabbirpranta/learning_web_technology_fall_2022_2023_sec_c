<?php
require_once('db.php');

function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into Student_model values('','{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}','{$user['gender']}', '{$user['address']}','{$user['username']}', '{$user['password']}' ,  '{$user['confirmpassword']}')";
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
    $sql = "UPDATE  Student_model SET ('','{$user['firstname']}' ,'{$user['lastname']}', '{$user['phoneno']}', '{$user['email']}', '{$user['address']}','{$user['username']}'";

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
    $sql = "select * from Student_model where username='{$user['username']}' and password='{$user['password']}'";
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
    $sql = "UPDATE Student_model SET Password =  '{$Password}' WHERE Email = '{$Email}' and UserName = '{$UserName}'";
    $result = mysqli_query($con, $sql);
    return true;
}
function getuserdata($user)
{
    $con = getConnection();
    $sql = "select * from student_model where id='{$user['id']}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function showUser($id)
{
    $conn = getConnection();
    $selectQuery = "SELECT * FROM Student_model where ID = $id";


}
?>