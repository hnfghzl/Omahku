<?php
function daftar($koneksi) {
    $new_email = $_POST['email']; // Mengambil email dari form pendaftaran
    $new_password = $_POST['password'];
    $nama =$_POST['nama']; // Mengambil password dari form pendaftaran
    $new_encrypted_password = md5($new_password);

    $insert_query = "INSERT INTO user (email, password,nama) VALUES ('$new_email', '$new_encrypted_password','$nama')";
    $insert_result = mysqli_query($koneksi, $insert_query);

    if ($insert_result) {
        header("location: properties.html");
exit();
    } else {
        echo "Pendaftaran gagal. Silakan coba lagi.";
    }
}

function login($koneksi) {
    $email = $_POST['email']; // Mengambil email dari form login
    $password = $_POST['password']; // Mengambil password dari form login
    $encrypted_password = md5($password);

    $query = "SELECT * FROM user WHERE email='$email' AND password='$encrypted_password'";

    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        echo "Login berhasil!";
    } else {
        echo "Login gagal. Email atau kata sandi salah.";
    }
}

// Set timezone
date_default_timezone_set("Asia/Bangkok");

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "register");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['action']) && $_POST['action'] == 'daftar') {
    daftar($koneksi);
} elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
    login($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>