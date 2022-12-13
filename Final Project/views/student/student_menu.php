<?php
require_once "../../config/db.php";

$query = "SELECT * FROM student_model where id =29";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/design.css">
</head>

<body>
    <?php
    $row = mysqli_fetch_assoc($result)
        ?>
    <div class="student_menu">
        <button><a href="student.php">Profile</a></button>
        <br>
        <button><a href="student_check_information.php?Id=<?php echo $row['id']; ?>">Check Info</a></button>
        <br>
        <button><a href="student_editinfo.php">Edit Profile</a></button>
        <br>
        <button><a href="student_class_shedule.php">Class Shedule</a></button>
        <br>
        <button><a href="student_check_note.php">Check note</a></button>
        <br>
        <button><a href="student_checkresult.php">Check Result</a></button>
        <br>
        <button><a href="student_take_section.php">Take Section</a></button>
        <br>
        <button><a href="student_drop.php">Drop Section</a></button>
        <br>
        <button><a href="student_payment.php">Payment</a></button>
        <br>
        <button><a href="student_exam_permit.php">Exam permit</a></button>
        <br>
        <button><a href="student_faculty_review.php">Faculty review</a></button>
        <?php

        ?>
    </div>
</body>

</html>