<?php
$id = $_GET['id_edit'];
include "php/koneksi.php"; // sesuaikan path jika perlu
$conn = dbkonek();
$data = $conn->query("SELECT * FROM tbl_blog WHERE id = '$id'");
$value = $data->fetch_assoc();
?>

<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php');
    exit();
}
?>

<div id="editdata" class="content-wrapper" style="padding: 30px; max-width: 800px; margin: auto;">
    <h1 class="mb-4">Edit Data Makanan</h1>

    <form method="POST" action="edit.php" enctype="multipart/form-data" id="edit">

        <div class="form-group mb-3">
            <label for="id">ID Makanan</label>
            <input type="text" class="form-control" name="id" value="<?php echo $value['id']; ?>" readonly>
        </div>

        <div class="form-group mb-3">
            <label for="judul">Nama Makanan</label>
            <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $value['judul']; ?>" required>
        </div>

        <div class="form-group mb-3">
            <label for="isi">Deskripsi</label>
            <textarea class="form-control" name="isi" rows="8" required id="isi"><?php echo $value['isi']; ?></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" maxlength="12" required id="kategori" value="<?php echo $value['kategori']; ?>">
        </div>

        <div class="form-group mb-3">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" maxlength="12" required id="harga" value="<?php echo $value['harga']; ?>">
        </div>

        <div class="form-group mb-3">
            <label>Gambar Saat Ini:</label><br>
            <img src="<?php echo $value['gambar_path']; ?>" alt="Gambar saat ini" style="max-width: 100%; height: auto; border: 1px solid #ccc; padding: 5px;">
        </div>

        <div class="form-group mb-4">
            <label for="gambar">Ganti Gambar:</label>
            <input type="file" class="form-control" name="gambar" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
