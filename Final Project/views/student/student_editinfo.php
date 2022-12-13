<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/design.css">
</head>

<body>

    <?php
    require 'student_home_logout.php';
    ?>

    <?php
    require 'student_menu.php';
    ?>
    <div class="menu_middle">

        <div class="student_edit">
            First Name
            <input type="text" name="firstName" value="fahad"> <br>
            <br>
            LastName
            <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"> <br>
            <br>
            Phone No.
            <input type="phone" name="phone" value="<?php echo $row['phoneno']; ?>"> <br>

            <br>
            Email
            <input type="email" name="email" value="<?php echo $row['email']; ?>"> <br>

            <br>
            Address
            <Address><input type="address" nam="address" value="<?php echo $row['address']; ?>"></Address>
            <br>

            Username
            <input type="text" name="username" value="<?php echo $row['username']; ?>">
            <br>
            <button style="margin:5px"><a href="edit.php?Id=<?php echo $row['Id']; ?>">Edit</a></button>
            <button style="margin:5px">save edit</button>

        </div>
    </div>






</body>

</html>