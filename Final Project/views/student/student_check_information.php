<?php
session_start();
require_once "../../models/Student_model.php";
// $id = $_GET['id'];
$sql = "SELECT * FROM student_model WHERE id=31";
// $sql = "SELECT * FROM student_model WHERE id={$id}";
// $result = mysqli_query($con, $sql);


// function userinfo($id)
// {
//     $con = getConnection();
//     $sql = "select * from Student_model where id = '?'";
//     $result = mysqli_query($con, $sql);
//     // $user = mysqli_fetch_assoc($result);
//     // header('location:student_check_info.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    require 'student_home_logout.php';
    ?>
    <?php
    require 'student_menu.php';

    ?>
    <div class="menu_middle">

        <div class="check_info">
            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>

            <fieldset>
                <legend>View Profile</legend>
                <p>FirstName :
                    <?php echo $firstname ?>
                </p>

            </fieldset>

            First Name :
            <?php echo $row['firstname']; ?>
            <br>
            <br>
            LastName :
            <?php echo $row['lastname']; ?>
            <br>
            <br>
            Phone No :
            <?php echo $row['phoneno']; ?>
            <br>
            <br>
            Email :
            <?php echo $row['email']; ?>
            <br>
            <br>
            Address :
            <?php echo $row['address']; ?>
            <br>
            <br>
            Username :
            <?php echo $row['username']; ?>
            <br>
            <br>
            <?php
            }

            ?>

        </div>
    </div>






</body>

</html>