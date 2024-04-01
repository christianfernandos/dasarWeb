<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header("location: sessionLoginForm.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
    <h2>Selamat datang <?php echo $_SESSION['username']; ?></h2>
    <br>
    <a href="sessionLogout.php">Log Out</a>
</body>
</html>
