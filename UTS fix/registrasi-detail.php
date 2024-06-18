<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Berhasil</title>
    <link rel="stylesheet" href="detailstyle.css">
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Berhasil!</h1>
        <h2>Detail Pendaftaran</h2>
        <?php
        session_start();
        if (isset($_SESSION["last_registration"])) {
            $registration = $_SESSION["last_registration"];
            echo "<p>Nama Lengkap: " . $registration["namaLengkap"] . "</p>";
            echo "<p>Email: " . $registration["email"] . "</p>";
            echo "<p>NIM: " . $registration["nim"] . "</p>";
            echo "<p>Jurusan: " . $registration["jurusan"] . "</p>";
            echo "<p>Cabang Olahraga: " . $registration["cabangOlahraga"] . "</p>";
        }
        ?>
        <h2>Dimohon untuk dapat menyimpan bukti pendaftaran ini</h2>
        <button type="submit" href="index.html"><a href="index.html" class="logout">Keluar</a><button>
    </div>
</body>
</html>

