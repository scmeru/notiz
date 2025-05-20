<?php 
	$id_hapus = $_GET['id_hapus'];

	echo "Data yang akan dihapus id = ".$id_hapus."<br>";

	include "php/koneksi.php"; // sesuaikan path jika perlu
    $conn = dbkonek();

	$delete = $conn->query("delete from tbl_blog where id = '$id_hapus'");

	if($delete){
		// Redirect kembali dengan menambahkan #manage_food pada URL
		header('Location: ' . $_SERVER['HTTP_REFERER'] . '#manage_food');
		exit(); // Pastikan script berhenti di sini
	} else {
		echo "Data gagal terhapus";
	}
?>
