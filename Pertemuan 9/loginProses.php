<?php
// Include file koneksi
include "koneksi.php";

// Periksa apakah form login telah di-submit
if(isset($_POST['Login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Query untuk memeriksa username dan password dalam database
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dieksekusi
    if($result){
        $cek = mysqli_num_rows($result);
        if ($cek) {
            echo "Anda berhasil login. Silahkan menuju <a href='homeAdmin.html'>Halaman HOME</a>";
        } else {
            echo "Anda gagal login. Silahkan <a href='loginForm.html'>Login kembali</a>";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Tutup koneksi
mysqli_close($conn);
?>
