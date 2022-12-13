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

    <div class="signup_form">
        <form action="../../controller/faculty_signup_check.php" method="post">
            <div class="background">

                <table class="area">
                    <tr>
                        <td><button class="signup_here">SIGNUP</button></td>
                        <td><button class="signup_here">FACULTY</button></td>
                    </tr>
                    <tr>
                        <td>FirstName</td>
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
                    <br>
                    <tr>
                        <td>
                            <p>Drop Your CV Here</p>
                        </td>
                        <td>
                            <input type="file" id="cv" name="cv" value="">
                        </td>
                    </tr>
                    <br>

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