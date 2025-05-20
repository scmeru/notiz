<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $ipAddress = $_SERVER['SERVER_ADDR'];

    // Proses pengunggahan gambar
    $uploadDirectory = "gambar/";
    $uploadedFile = $uploadDirectory . basename($_FILES["gambar"]["name"]);

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadedFile)) {
        // Gambar berhasil diunggah, simpan path atau URL ke database
        $gambarPath = $uploadedFile;

        // Simpan data ke database
        include "php/koneksi.php"; // sesuaikan path jika perlu
        $conn = dbkonek();
        $simpan = $conn->query("INSERT INTO tbl_blog (kode, judul, isi, kategori, gambar_path, harga) VALUES ('$kode','$judul', '$isi', '$kategori', '$gambarPath', '$harga')");

        if ($simpan) {
            //echo "Berhasil disimpan ";
            header('Location:http://notiz.great-site.net/?menu=3#manage_food');
        } else {
            echo "Gagal disimpan";
        }
    } else {
        echo "Error in uploading file.";
    }
}
?>
