<?php
if (isset($_GET['abc'])) {
    echo "Password is empty ";
}
if (isset($_GET['abc1'])) {
    echo "Confirm Password is empty ";
}
if (isset($_GET['abc2'])) {
    echo " New Password should not be same as the Current Password ";
}
if (isset($_GET['abc3'])) {
    echo " New password and confirm password not same ";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <div style="background-color:#87CEFA;">
        <form method="post" action="../controller/forgot_password_check.php" enctype="">
            <fieldset>
                <legend>Reset your password</legend>
                <table>
                    <tr>
                        <td>Enter your email</td>
                    <tr></tr>
                    <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                    <tr></tr>
                    <td><input type="text" name="username" value=""></td>
                    </tr>

                    <tr>
                        <td>New Password</td>
                    <tr></tr>
                    <td><input type="password" name="New_Password" value=""></td>
                    </tr>
                    <tr>
                        <td>Confirm New Password</td>
                    <tr></tr>
                    <td><input type="password" name="Confirm_New_Password" value=""></td>
                    </tr>
                    <td>
                        <br> </br>
                        <input type="submit" name="" value="Reset Password">
                        <a href="../view/LogIn.php"> Back </a>
                    </td>
                    </tr>
                </table>
            </fieldset>
        </form>

    </div>

</body>

</html>