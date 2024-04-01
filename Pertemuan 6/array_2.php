<!-- untuk menampilkan informasi seorang dosen dalam bentuk tabel html -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px auto;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>
<?php
//untuk mendefinisikan sebuah array 
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis kelamin' => 'Perempuan'
];
?>
<table>
    <tr>
        <th>Informasi Dosen</th>
        <th></th>
    </tr>
<!-- untuk melakukan perulangan foreach dalam PHP -->
    <?php foreach ($Dosen as $key => $value) : ?>
    <tr>
<!-- untuk mengonversi kunci dari array $Dosen -->
        <td><?= ucwords(str_replace('_', ' ', $key)); ?></td>
        <td><?= $value; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
