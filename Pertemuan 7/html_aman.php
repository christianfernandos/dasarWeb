<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        echo "Email yang dimasukkan: $email";
    } else {
        // Tangani input yang tidak valid
        echo "Email tidak valid";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
