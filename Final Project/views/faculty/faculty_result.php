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
            <form action="welcome.php" method="post">
                Name : <input type="text" name="name"><br>
                Id no : <input type="text" name=" id  "><br>
                Mark : <input type="text" name="mark"><br>
                <label for="Subject">Subject:</label>
                <select id="Subject" name="subject">
                    <option value="COMPUTER ORGANIZATION AND ARCHITECTURE">COMPUTER ORGANIZATION AND
                        ARCHITECTURE</option>
                    <option value="COMPUTER NETWORKS">COMPUTER NETWORKS</option>
                    <option value="SOFTWARE REQUIREMENT ENGINEERING">SOFTWARE REQUIREMENT ENGINEERING</option>
                    <option value="WEB TECHNOLOGIES">WEB TECHNOLOGIES</option>
                </select>

                <label for="section">Section:</label>
                <select id="section" name="section">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
                <input type="submit">
            </form>
        </div>





    </div>

</body>

</html>