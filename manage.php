<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // Jika belum login, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>
<!-- Tambahkan ini ke luar div utama -->
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="col-lg-8 mt-4" id="manage_food">
        <div class="artikel-container">
            <div class="artikel-header text-center">
                <b>Welcome Admin Notiz!</b>
            </div>
            <div class="artikel-body">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h5 class="artikel-title">Manage Food</h5>
                    <a href="?menu=2#tambah" class="btn btn-success">Add Food</a>
                </div>
                <table class="table table-bordered table-dark table-striped">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        include "php/koneksi.php"; // sesuaikan path jika perlu
                        $conn = dbkonek();
                        $data = $conn->query("SELECT * FROM tbl_blog");                        
                    ?>
                    <tbody>
                        <?php
                            $no = 1;
                            while ($row = $data->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><?php echo $row['isi']; ?></td>
                            <td><?php echo $row['kategori']; ?></td>
                            <td><?php echo $row['harga']; ?></td>
                            <td>
                                <a href="?menu=4&id_edit=<?php echo $row['id'] ?>#editdata" class="btn btn-primary btn-sm">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</a>
                                <script>
                                    function confirmDelete(articleId) {
                                        var confirmation = confirm("Apakah Anda yakin ingin menghapus ini?");
                                        if (confirmation) {
                                            window.location.href = "hapus.php?id_hapus=" + articleId;
                                        }
                                    }
                                </script>
                            </td>
                        </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</div>









