<?php
include "koneksi.php";
$username = $_POST['username'];
$password = ($_POST['password']);

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connect,$query);
$fechResult = mysqli_fetch_assoc($result);

if($fechResult['role']=='admin') {
    echo "Anda berhasil login";
    echo "<a href='adminDashboard.html'>Admin</a>";
}elseif ($fechResult['role']=='user') {
    echo "Anda berhasil login";
    echo "<a href='userDashboard.html'>User Dashboard</a>";
}else {
    echo "Anda gagal login";
    echo "<a href='loginForm.html'>Login Form</a>";
}

mysqli_close($connect);
?>