<?php
include 'koneksi.php';

// Mendapatkan username dan password dari permintaan POST
$username = $_POST['username'] ?? '';
$password = ($_POST['password'] ?? '');

// Memeriksa apakah username dan password tidak kosong
if (empty($username) || empty($password)) {
    echo "Username atau Password tidak boleh kosong.";
    exit();
}

// Menyiapkan dan menjalankan query
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect, $query);

// Memeriksa apakah query berhasil dijalankan
if (!$result) {
    echo "Kesalahan Query: " . mysqli_error($connect);
    exit();
}

// Memeriksa jumlah baris yang dikembalikan
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    echo "Anda berhasil login";
    echo "<a href='adminDashboard.html'>Admin</a>";
} else {
    echo "Anda gagal login";
    echo "<a href='loginForm.html'>Form Login</a>";
}

// Menutup koneksi
mysqli_close($connect);
?>
