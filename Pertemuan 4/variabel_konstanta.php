<!-- 
menambahkan file variabel_konstanta pada direktori dasarWeb -->
<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

// menambahkan tipe data boolean pada file variabel_konstanta
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";

// menambahkan fungsi define() untuk mendefinisikan sebuah konstanta
define("NAMA_SITUS","WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo " Selamat datang di ". NAMA_SITUS . ", situs yang 
didirikan pada tahun ". TAHUN_PENDIRIAN . ".";
?>
