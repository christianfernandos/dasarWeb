function validateForm() {
    var namaLengkap = document.getElementById("namaLengkap").value;
    var email = document.getElementById("email").value;
    var nim = document.getElementById("nim").value;
    var jurusan = document.getElementById("jurusan").value;
    var cabangolahraga = document.getElementById("cabangolahraga").value;
    var berkasKTM = document.getElementById("berkasKTM").value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

    if (namaLengkap === "" || email === "" || nim === "" || jurusan === "" || cabangolahraga === "" || berkasKTM === "") {
        alert("Mohon lengkapi semua kolom.");
        return false;
    }

    if (!allowedExtensions.exec(berkasKTM)) {
        alert("Format berkas KTM harus JPG, JPEG, atau PNG.");
        return false;
    }

    // Set cookie for successful registration
    document.cookie = "registration_status=success";
    // Display success notification
    alert("Pendaftaran berhasil!");
    return true;
}
