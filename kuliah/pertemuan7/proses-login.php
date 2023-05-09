<?php
// Cek apakah form sudah disubmit
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Ambil nilai dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi
    if ($username == 'admin' && $password == 'admin123') {
        // Jika login sukses, tampilkan pesan "Anda telah login", tanggal login, nama username, dan passwordnya
        echo "Anda telah login<br>";
        echo "Tanggal login: " . date("d/m/Y") . "<br>";
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password;
    } else {
        // Jika login gagal, tampilkan pesan error
        echo "Username atau password salah";
    }
}
