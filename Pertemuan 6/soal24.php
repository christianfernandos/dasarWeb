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
            // yang dimana berfungsi sebagai data yang di passing tidak melalui query string pada URL , tapi pada body request
            $name = $_POST['fname'];
            if(empty($name)){
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
    </body>
</html>
