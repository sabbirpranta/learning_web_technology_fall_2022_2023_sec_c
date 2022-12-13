<?php
if (isset($_GET['err1'])) {
    echo "First name is Emtpy ";
}
if (isset($_GET['err'])) {
    echo "Null username and password";
}
if (isset($_GET['err2'])) {
    echo "Only letters and spaces allowed";
}
if (isset($_GET['err3'])) {
    echo "Gender not selected ";
}
if (isset($_GET['err4'])) {
    echo "Email is incorrect\n ";
}
if (isset($_GET['err5'])) {
    echo "Mobile No is empty\n";
}
if (isset($_GET['err6'])) {
    echo "Mobile No must only contain numbers\n";
}
if (isset($_GET['err7'])) {
    echo "Mobile No must have 11 digits\n";
}
if (isset($_GET['err8'])) {
    echo "Address is empty\n";
}
if (isset($_GET['err9'])) {
    echo "Password does not match try again\n";
}
if (isset($_GET['err10'])) {
    echo " Password must not be less than eight (8) characters
        try again\n";
}
if (isset($_GET['err11'])) {
    echo "  Password must contain at least one of the special characters (@, #, $, %)
        try again\n";
}
if (isset($_GET['err12'])) {
    echo "  User Name must contain at least two (2) characters
        try again\n";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="../../assets/design.css">
</head>

<body>
    <div class="signup_form">
        <form action="../../controller/Signup_check.php" method="post">
            <div class="background">

                <table class="area">
                    <tr>
                        <th><button class="signup_here">SIGNUP</button></th>
						<th><button class="signup_here">STUDENTS</button></th>
                    </tr>
                    <tr>
                        <td>FirstName</td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <td><input type="text" id="firstname" name="firstName" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>LastName</td>
                        <td><input type="text" id="lastname" name="lastName" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>PhoneNo.</td>
                        <td><input type="phone" id="phoneno" name="phoneno" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" id="email" name="email" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Gender</td>
                        <td><input class="rd" type="radio" name="gender" id="gender">Male
                            <input class="rd" type="radio" name="gender" id="gender">Female<br>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Address</td>
                        <td>
                            <Address><input type="address" id="address" name="address"></Address>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" id="username" name="username" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" id="txtPassword" name="password" value=""></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Confirm_Password</td>
                        <td><input type="password" id="txtConfirmPassword" name="Confirmpassword" value=""></td>
                    </tr>

                    <tr>
                        <td>Upload picture</td>
                        <td>

                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="image" value="">
                            </form>
                        </td>


                    </tr>
                    <br>
                    <tr>

                        <td><input class="signup_submit" id="btnSubmit" onclick="return Validate()" type="submit"
                                name="submit" value="Register">
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><a href="../login/Login.php">Student Login</a></td>
                        <td><a href="../login/faculty_login.php">Faculty Login</a></td>
                        <td><a href="../login/accounts_login.php">Accounts Login</a></td>
                    </tr>



                </table>
                <script type="text/javascript"
                    src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                <script type="text/javascript">
                    function Validate() {
                        var password = document.getElementById("txtPassword").value;
                        var confirmPassword = document.getElementById("txtConfirmPassword").value;
                        if (password != confirmPassword) {
                            alert("Passwords do not match.");
                            return false;
                        }
                        return true;
                    }
                </script>


            </div>



        </form>
    </div>
    </div>


</body>

</html>