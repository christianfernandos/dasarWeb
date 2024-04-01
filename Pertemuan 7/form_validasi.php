<!DOCTYPE html>
<html>
<head>
<title>Form Input dengan Validasi</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="n">
    <span id="nama-error" style="color: red;"></span><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="11">
    <span id="email-error" style="color: red;"></span><br>
    
    <input type="submit" value="Submit">
</form>
<div id="hasil"></div>

<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); // Menghentikan pengiriman form secara default
        
        var nama = $("#nama").val();
        var email = $("#email").val();
        var valid = true;
        
        // Validasi nama
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }
        
        // Validasi email
        if (email === '') {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }
        
        // Jika formulir valid, kirim data menggunakan AJAX
        if (valid) {
            $.ajax({
                url: "proses_validasi.php",
                type: "POST",
                data: {nama: nama, email: email},
                success: function(response) {
                    $("#hasil").html(response); // Menampilkan pesan balasan dari server
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText); // Menampilkan pesan error jika terjadi kesalahan
                }
            });
        }
    });
});
</script>
</body>
</html>
