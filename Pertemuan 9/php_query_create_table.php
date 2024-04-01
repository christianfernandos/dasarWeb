<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "prakwebdb";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk membuat tabel user
$sql = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
