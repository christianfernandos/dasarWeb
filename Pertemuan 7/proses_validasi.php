<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();
    
    // berfungsi untuk memvalidasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }
    
    // berfungsi untuk mevalidasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    
    // untuk mevalidasi password
    if (empty($password) || strlen($password) < 8) {
        $errors[] = "Password harus diisi dan minimal 8 karakter.";
    }
    
    // berfungsi untuk mengeksekusi , jika tidak error maka data terproses
    if (empty($errors)) {
        // Misalnya, menyimpan data ke database atau mengirim email
        echo "Data berhasil disimpan: Nama - $nama, Email - $email, Password - $password";
    } else {
        // Jika ada error, tampilkan pesan error
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
