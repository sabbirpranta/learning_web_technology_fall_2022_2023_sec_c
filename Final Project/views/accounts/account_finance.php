<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color:#f0af65;">
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
                        <b>Check Student:</b><br>
						NAME <br>
                        <input type="text"><br>
                        ID <br>
                        <input type="text"><br>
                        <input type="submit" value="SHOW">
                        
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