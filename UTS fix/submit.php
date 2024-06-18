<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $allowedExtensions = array("jpg", "jpeg", "png");
    if (empty($_POST["namaLengkap"]) || empty($_POST["email"]) || empty($_POST["nim"]) || empty($_POST["jurusan"]) || empty($_POST["cabangOlahraga"]) || empty($_FILES["berkasKTM"]["name"])) {
        $_SESSION["notification"] = "Pendaftaran Gagal! Mohon lengkapi semua kolom.";
    } else {
        $fileExtension = pathinfo($_FILES["berkasKTM"]["name"], PATHINFO_EXTENSION);
        if (!in_array(strtolower($fileExtension), $allowedExtensions)) {
            $_SESSION["notification"] = "Pendaftaran Gagal! Format berkas KTP harus dalam format JPG, JPEG, atau PNG.";
        } else {
            $_SESSION["notification"] = "Pendaftaran berhasil!";

            $_SESSION["last_registration"] = array(
                "namaLengkap" => $_POST["namaLengkap"],
                "email" => $_POST["email"],
                "nim" => $_POST["nim"],
                "jurusan" => $_POST["jurusan"],
                "cabangOlahraga" => $_POST["cabangOlahraga"],
                "berkasKTM" => $_FILES["berkasKTM"]["name"]
            );
            setcookie("registration_status", "success", time() + (86400 * 30), "/");
        }
    }
}
header("Location: registrasi-detail.php");
exit();
?>
