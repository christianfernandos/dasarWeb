<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location: homeSession.php");
} else {
    echo "Gagal login, silahkan coba lagi";
}
?>
