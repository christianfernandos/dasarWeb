<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $uploaded_files = array();

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(end(explode('.', $file_name)));
        $extensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file ".$file_name." tidak boleh lebih dari 2 MB.";
        }

        if (empty($errors) == true) {
            $upload_dir = "images/";
            $uploaded_file = $upload_dir . $file_name;
            if (move_uploaded_file($file_tmp, $uploaded_file)) {
                $uploaded_files[] = $uploaded_file;
            }
        }
    }

    if (!empty($errors)) {
        echo implode(" ", $errors);
    } else {
        echo "File-file berhasil diunggah:<br>";
        foreach ($uploaded_files as $file) {
            echo "<img src='$file' width='150'><br>";
        }
    }
}
?>
