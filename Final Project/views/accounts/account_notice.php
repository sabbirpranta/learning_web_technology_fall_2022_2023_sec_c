<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color:#f07365;">
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
                    <div style="display:grid;justify-content:center;">
                        <div>
                        <h1 style="text-align:center;">Write Notice</h1><br>
                        <textarea  name="" id="" cols="20" rows="5"></textarea>
                        </div>
                        

                        </div>
                        <button style="">Send</button>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>

                </tr>
            </tr>
       
        </table>
       


    </div>
    
</body>
</html>