<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color:#87CEFA;">
        <table align="center" border="1px">
            <tr>
                <td>
                    <?php
                        require 'account_home_logout.php';
                    ?>
                </td>
                <tr>
                    <td>
                        <?php
                        require 'accounts_menu.php';
                        ?>
                    </td>
					  <td>
                        <h4>Check student valid or not</h4>
                        NAME <br>
                        <input type="text"><br>
                        ID <br>
                        <input type="text"><br>
                        <input type="submit" value="Check">

                        
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
            </tr>
       
        </table>
        
       


    </div>
    
</body>
</html>