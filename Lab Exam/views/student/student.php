<?php
require_once('../../config/db.php');

$query = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($con, $query);
?>

<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('location:login.php');
}
//  if(isset($_FILES['error'])){
//     echo "File is large please select another ";
//  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asstest/design.css">
</head>

<body>
    <div>
        <?php
        require 'student_home_logout.php';
        ?>
        <?php
        require 'student_menu.php';
        ?>
        <div class="menu_middle">


            <form action="upload.php" method="post" enctype="multipart/form-data">
                Upoad Profile Picture: <br><input type="file" name="image" value=""><br>
                <input class="s" type="submit" name="submit" value="SUBMIT">





                <h3>Welcome
                    <?php echo $_SESSION['username'] ?>
                </h3>

            </form>
        </div>

    </div>

</body>

</html>