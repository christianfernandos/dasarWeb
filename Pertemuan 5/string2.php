<?php

//untuk mencetak string baris diikuti  dengan newline
echo "Baris\nbaru <br>"; //soal 10.a
//untuk mencetak string karena menggunakan tidak terinterpretasikan debagai newline
echo 'Baris\nbaru <br>'; //soal 10.b
// untuk mencetak string  "Halo", kemudian menggeser kursor ke awal baris menggunakan karakter carriage return (\r)
echo "Halo\rDunia <br>"; //soal 10.c
echo 'Halo\rDunia <br>'; ////soal 10.d

// untuk mencetak karakter \t dicetak sebagai teks biasa. Begitu juga dengan spasi yang tidak perlu di dalam tag < /pre>
echo "<pre>Halo\tDunia !< /pre>"; //soal 10.e
echo '<pre>Halo\tDunia !< /pre>'; //soal 10.f

// untuk mencetak string "Katakanlah "Tidak pada narkoba!"", dengan tanda kutip ganda diapit oleh escape sequence \", diikuti dengan tag HTML <br>.
echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //soal 10.g
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //soal 10.h

?>