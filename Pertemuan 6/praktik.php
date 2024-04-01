<?php
//membuat fungsi hitungUmur
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

//memanggil fungsi hitungUmur dan menampilkan hasilnya
echo "Saya berusia ". hitungUmur(1988, 2023)." tahun<br/>";

//membuat fungsi perkenalan
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Elok");
?>
