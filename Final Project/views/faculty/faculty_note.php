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
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select pdf to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload pdf" name="submit">

            </form>
            Section <br>
            <input type="radio" name="section" id="section">A
            <input type="radio" name="section" id="section">B
            <input type="radio" name="section" id="section">C<br>
        </div>





    </div>

</body>

</html>