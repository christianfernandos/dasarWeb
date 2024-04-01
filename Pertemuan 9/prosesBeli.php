<?php
$beliNovel = $_POST['beliNovel'];
$beliBuku = $_POST['beliBuku'];

setcookie('beliNovel', $beliNovel, time() + 3600);
setcookie('beliBuku', $beliBuku, time() + 3600);

echo "Jumlah Novel yang dibeli: " . $beliNovel . "<br>";
echo "Jumlah Buku Teks yang dibeli: " . $beliBuku;
?>
