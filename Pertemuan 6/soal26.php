<?php
$x=75;
$y=25;

// kode $Global berfungsi untuk menyimpan menyimpan semua variabel global yang didefinisikan saat program dijalankan
function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z;
?>
