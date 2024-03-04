<!-- mengimplementasi kode operator aritmatika pada file operator.php -->
<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali =  $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

//menambahkan kode pengeksekusian operator aritmatika
echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Pembagian: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br>";
echo "<hr>";

//mengimplementasi kode operator pembanding 
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

//menambahkan kode pengeksekusian operator pembanding
echo "Hasil Sama: $hasilTambah <br>";
echo "Hasil Tidak Sama: $hasilKurang <br>";
echo "Hasil Lebih Kecil: $hasilKali <br>";
echo "Hasil Lebih Besar: $hasilBagi <br>";
echo "Hasil Lebih Kecil Sama: $sisaBagi <br>";
echo "Hasil Lebih Besar Sama: $pangkat <br>";
echo "<hr>";

//mengimplementasi kode operator logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

//menambahkan kode pengeksekusian operator logika
echo "Hasil Operasi AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil Operasi OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil Operasi NOT a: " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "Hasil Operasi NOT b: " . ($hasilNotB ? 'true' : 'false') . "<br>";
echo "<hr>";

//mengimplementasi kode operator penugasan
$penjumlahan = $a += $b;
$pengurangan = $a -= $b;
$perkalian = $a *= $b;
$pembagian = $a /= $b;
$modulo = $a %= $b;

//menambahkan kode pengeksekusian operator penugasan
echo "Hasil penjumlahan: " . $penjumlahan . "<br>";
echo "Hasil pengurangan: " . $pengurangan . "<br>";
echo "Hasil perkalian: " . $perkalian . "<br>";
echo "Hasil pembagian: " . $pembagian . "<br>";
echo "Hasil modulo: " . $modulo . "<br>";
echo "<hr>";

//mengimplementasi kode operator Identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

//menambahkan kode pengeksekusian operator identik
echo "Hasil identik: " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil tidak identik: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
echo "<hr>";

//Soal Cerita
$totalKursi = 45;                                               //menambahkan kode untuk mengetahui jumlah kursi
$kursiyangDitempati = 28;                                       //menambahkan kode untuk mengetahui jumlah kursi yang ditempati pelanggan
$kursiKosong = $totalKursi - $kursiyangDitempati;               //menambahkan kode untuk menghitung jumlah kursi yang kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;         //menambahkan kode untuk menghitung jumlah presentase kursi yang kosong

echo "Presentase kursi kosong = {$persentaseKosong} <br>";      //menambahkan kode pengeksekusian soal cerita untuk menampilkan presentase kursi kosong
echo"<hr>"

?>
