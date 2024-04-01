<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
//kode tersebut berfungsi dalam penggunaan variabel $_REQUEST
// yang dapat gabungan nilai dari variabel $_GET, $_POST, dan $_COOKIE yang kesemuanya berhubungan dengan 
// data yang dikirim bersamaan dengan request user
            $name = $_REQUEST['fname'];
            if(empty($name)){
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </body>
</html>

