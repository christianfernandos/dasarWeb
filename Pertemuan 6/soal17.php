<!-- Cara 1 => untuk menambahkan PHP didalam HTML -->

<!-- <html>
    <head>
        <title>Cara 1</title>
    </head>
    <body>
        <p>Tanggal Hari Ini: <?php echo date("d M Y")?></p>
    </body>
</html> -->

<!-- Cara 2 => untuk menambahkan HTML didalam PHP -->
<?php
echo '<html>';
echo '<head><title>Cara 2</title></head>';
echo '<body>';
echo '<p>Tanggal Hari ini : '.date('d M Y'). '</p>';
echo '</body>';
echo '</html>';
?>

<!-- SOAL 17 -->
<!-- PERTANYAAN -- Dari dua cara tersebut mana yang lebih mudah menurut kalian, kemukakan jawaban disertai
dengan alasan -->
<!--JAWABAN -- dari segi kemudahan lebih kepada kode 1 karena
lebih praktis dalam penulisan source code nya. -->