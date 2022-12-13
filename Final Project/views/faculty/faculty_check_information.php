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
    require 'faculty_home_logout.php';
    ?>

    <?php
    require 'faculty_menu.php';
    ?>



    <div class="menu_middle">
        <div class="check_info">


            First Name
            <input type="text" name="firstName" value=""> <br>
            <br>
            LastName
            <input type="text" name="lastname" value=""> <br>
            <br>
            Phone No.
            <input type="phone" name="phone" value=""> <br>

            <br>
            Email
            <input type="email" name="email" value=""> <br>

            <br>
            Gender
            <input type="radio" name="gender" id="gender">Male
            <input type="radio" name="gender" id="gender">Female<br>

            <br>
            Address
            <Address><input type="address"></Address>
            <br>

            Username
            <input type="text" name="username" value="">
            <br>
            <button style="margin:5px">Edit</button>
        </div>
    </div>







</body>

</html>