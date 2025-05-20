<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $ipAddress = $_SERVER['SERVER_ADDR'];

    include "php/koneksi.php"; // sesuaikan path jika perlu
     $conn = dbkonek();

    // Jika ada file gambar yang diunggah
    if ($_FILES["gambar"]["name"]) {
        // Proses pengunggahan gambar
        $uploadDirectory = "gambar/";
        $uploadedFile = $uploadDirectory . basename($_FILES["gambar"]["name"]);

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadedFile)) {
            // Gambar berhasil diunggah, simpan path atau URL ke database
            $gambarPath = $uploadedFile;

            // Update data ke database termasuk kolom gambar_path
            $update = $conn->query("UPDATE tbl_blog SET judul='$judul', isi='$isi', kategori='$kategori', gambar_path='$gambarPath', harga='$harga' WHERE id ='$id' ");

            if ($update) {
                //echo "Berhasil disimpan ";
                header('Location:http://notiz.great-site.net/?menu=3#manage_food');
            } else {
                echo "Gagal Di Edit";
            }
        } else {
            echo "Error in uploading file.";
        }
    } else {
        // Jika tidak ada file gambar yang diunggah, update data kecuali kolom gambar_path
        $update = $conn->query("UPDATE tbl_blog SET judul='$judul', isi='$isi', kategori='$kategori', harga='$harga' WHERE id ='$id' ");

        if ($update) {
            //echo "Berhasil disimpan ";
            header('Location:http://notiz.great-site.net/?menu=3#manage_food');
        } else {
            echo "Gagal Di Edit";
        }
    }
}
?>
