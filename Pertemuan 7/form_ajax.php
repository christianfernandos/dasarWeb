<!DOCTYPE html>
<html>
<head>
<title>Contoh Form dengan PHP dan jQuery</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>Form Contoh</h2>
<form id="myForm">
<label for="buah">Pilih Buah:</label>
<select name="buah" id="buah">
<option value="apel">Apel</option>
<option value="pisang">Pisang</option>
<option value="mangga">Mangga</option>
<option value="jeruk">Jeruk</option>
</select>
<br>
<label>Pilih Warna Favorit:</label><br>
<input type="checkbox" name="warna[]" value="merah"> Merah<br>
<input type="checkbox" name="warna[]" value="biru"> Biru<br>
<input type="checkbox" name="warna[]" value="hijau"> Hijau<br>
<br>
<label>Pilih Jenis Kelamin:</label><br>
<input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
<input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>
<br>
<input type="submit" value="Submit">
</form>
<div id="hasil">
<!-- untuk menampilkan hasil -->
</div>

<script>
$(document).ready(function () {
$("#myForm").submit(function(e) {
e.preventDefault(); // berfungsi untuk mencegah pengiriman form secara default
// berfungsi untuk mengumpulkan data form
var formData = $("#myForm").serialize();
// Kirim data ke server PHP
$.ajax({
url: "proses_lanjut.php", // Ganti dengan nama file PHP yang sesuai
type: "POST",
data: formData,
success: function (response) {
// berfungsi untuk menampilkan  hasil dari server di div "hasil"
$("#hasil").html(response);
}
});
});
});
</script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = isset($_POST['buah']) ? $_POST['buah'] : '';
    $selectedWarna = isset($_POST['warna']) ? $_POST['warna'] : [];
    $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';

    echo "Anda memilih buah: " . $selectedBuah . "<br>";
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna);
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>
