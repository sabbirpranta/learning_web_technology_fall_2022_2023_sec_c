<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <?php
        require 'faculty_home_logout.php';
        ?>
        <?php
        require 'faculty_menu.php';
        ?>
        <div class="menu_middle">
            <h3>Drop Request</h3>

            <form action="welcome.php" method="post">
                Name : Prnato Bormon<br>
                Student Id: 18-39134-3<br>
                Subject : DataBase<br>
                Section :C<br>
                <button>Accept</button>
                <button>Reject</button>
            </form>

        </div>

    </div>

</body>

</html>