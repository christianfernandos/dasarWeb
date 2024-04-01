<?php
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Christian Fernando<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // untuk memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan(); 


// untuk menggunakan parameter , serta memanggil fungsi 2x tetapi dengan isi yang berbeda
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Ekklesia","Hallo Guys");

// echo "<hr>";
// $saya = "Christian Fernando";
// $ucapanSalam = "Selamat pagi semua";

// perkenalan($saya, $ucapanSalam);

//untuk memberikan nilai default
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang dibuat
perkenalan("Ekklesia","Hallo Guys");

echo "<hr>";

$saya = "Christian Fernando";
$ucapanSalam = "Selamat pagi semua";

//memanggil lagi tanpa mengisi parameter salam
perkenalan($saya);

?>