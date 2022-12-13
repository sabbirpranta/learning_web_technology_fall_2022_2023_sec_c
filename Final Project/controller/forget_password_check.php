<?php
session_start();

require_once "../model/adminModel.php";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['New_Password'];
$conpassword = $_POST['Confirm_New_Password'];


$status = adminForgotPass($username, $email, $password);
if ($status == true) {
    echo "Password Changed";
}
?>
<html>

<body>
    <tr>
        <td>
            <br></br>
            <a href="../view/LogIn.php"> Back </a>
        </td>
    </tr>
</body>

</html>