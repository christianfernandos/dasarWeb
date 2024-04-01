<?php
//berfungsi untuk memproses data yang akan dikirim melalui formulir HTML menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>
