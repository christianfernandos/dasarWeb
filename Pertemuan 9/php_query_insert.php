<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk memasukkan data ke tabel user
$sql = "INSERT INTO user (id, nama, password) VALUES (1, 'admin', '123')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke tabel user";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
