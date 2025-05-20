<!-- process_login.php -->

<?php
session_start();

// Simpan informasi login di sini
$validUsername = 'admin';
$validPassword = '123321';

// Ambil nilai dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa kecocokan dengan informasi login yang valid
if ($username == $validUsername && $password == $validPassword) {
    // Jika cocok, simpan informasi login ke session
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header('Location: welcome.php'); // Redirect ke halaman Welcome
} else {
    // Jika tidak cocok, kembali ke halaman login
    header('Location: login.php');
}
?>
