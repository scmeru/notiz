<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Jika belum login, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>


<!-- Tambahkan wrapper khusus agar tidak bentrok -->
<div id="tambah" class="form-wrapper" style="max-width:600px;margin:40px auto;padding:30px;background:#fff;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);">

    <h1 style="text-align:center;color:#333;margin-bottom:30px;">Tambah Makanan</h1>

    <form method='POST' action="simpan.php" enctype="multipart/form-data">
        <div style="margin-bottom:20px;">
            <label for="kode" style="display:block;margin-bottom:5px;font-weight:bold;">ID:</label>
            <input type="text" name="kode" id="kode" required style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;">
        </div>

        <div style="margin-bottom:20px;">
            <label for="judul" style="display:block;margin-bottom:5px;font-weight:bold;">Nama:</label>
            <input type="text" name="judul" id="judul" required style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;">
        </div>

        <div style="margin-bottom:20px;">
            <label for="isi" style="display:block;margin-bottom:5px;font-weight:bold;">Deskripsi:</label>
            <textarea name="isi" id="isi" rows="5" required style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;"></textarea>
        </div>

        <div style="margin-bottom:20px;">
            <label for="kategori" style="display:block;margin-bottom:5px;font-weight:bold;">Kategori:</label>
            <input type="text" name="kategori" id="kategori" maxlength="12" required style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;">
        </div>

        <div style="margin-bottom:20px;">
            <label for="harga" style="display:block;margin-bottom:5px;font-weight:bold;">Harga:</label>
            <input type="number" name="harga" id="harga" required style="width:100%;padding:10px;border:1px solid #ccc;border-radius:5px;">
        </div>

        <div style="margin-bottom:20px;">
            <label for="gambar" style="display:block;margin-bottom:5px;font-weight:bold;">Foto:</label>
            <input type="file" name="gambar" id="gambar" accept="image/*" required style="width:100%;padding:5px;border:1px solid #ccc;border-radius:5px;">
        </div>

        <button type="submit" style="width:100%;padding:12px;background:#007bff;color:white;border:none;border-radius:5px;font-size:16px;cursor:pointer;">Tambah</button>
    </form>
</div>