
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
                        <th><button class="signup_here">SIGNUP HERE</button></th>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td><input type="id" id="id" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" id="email" name="email" value=""></td>
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
                        <td><label for="type"> User Type</label></td>
                        <td><select name="type">
	                    <option value="none" selected>Type</option>
	                    <option value="lname">Admin</option>
	                    <option value="lname">User</option>
                        </select></td>
                    </tr>                    
                    <tr>

                        <td><input class="signup_submit" id="btnSubmit" onclick="return Validate()" type="submit"
                                name="submit" value="Register">
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td><a href="../login/Login.php">Login</a></td>
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