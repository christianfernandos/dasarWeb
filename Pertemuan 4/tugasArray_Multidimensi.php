<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .student-avatar {
            width: 100px;
            height: 130px; 
            object-fit: cover; 
            margin-right: 20px;
        }
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa Array Multidimensi -- Christian Fernando S/SIB 2D/05 -- </h2>

    <?php
    // menambahkan array multidimensi untuk mahasiswa
    $mahasiswa = array(
        array("Nama" => "Dhot", "NIM" => "111111", "Jurusan" => "Teknik Elektro", "Email" => "dhottt@gmail.com", "Avatar" => "img/fotodhot.jpg"),
        array("Nama" => "Kona", "NIM" => "222222", "Jurusan" => "Teknik Mesin", "Email" => "konaaa@gmail.com", "Avatar" => "img/fotokona.jpg"),
        array("Nama" => "Roby", "NIM" => "333333", "Jurusan" => "Teknologi Informasi", "Email" => "robyyy@gmail.com", "Avatar" => "img/fotoroby.jpg"),
        array("Nama" => "Dinda", "NIM" => "444444", "Jurusan" => "Akuntansi", "Email" => "dindaaa@gmail.com", "Avatar" => "img/fotodinda.jpg"),
        array("Nama" => "Peot", "NIM" => "555555", "Jurusan" => "Teknik Kimia", "Email" => "peottt@gmail.com", "Avatar" => "img/fotopeot.jpg"),
    );

    // memberikan perulangan pada array data mahasiswa agar dapat ditampilkan
    foreach ($mahasiswa as $data) {
        echo '<div class="student-container">';
        echo '<img src="' . $data ["Avatar"] . '" alt="Avatar" class="student-avatar">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $data["Nama"] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $data["NIM"] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $data["Jurusan"] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $data["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>