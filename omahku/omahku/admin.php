<?php
session_start();
date_default_timezone_set("Asia/Bangkok");

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "register");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Cek apakah sudah login
if (!isset($_SESSION['login_user'])) {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari sesi
$email = $_SESSION['login_user'];

// Query untuk mengambil informasi pengguna
$query = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <title>Admin - Omahku Hostel</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/omahku.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <style>
    body {
      background: linear-gradient(to right, #ffecd2, #fcb69f);
      font-family: "Poppins", sans-serif;
    }
    .admin-panel {
      width: 100%;
      max-width: 800px;
      padding: 30px;
      margin: 50px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    .admin-panel h2 {
      margin-bottom: 30px;
      color: #333;
      text-align: center;
    }
    .admin-panel .btn-primary {
      border-radius: 20px;
      background: #ff6f61;
      border: none;
      padding: 10px 20px;
      transition: background 0.3s ease-in-out;
    }
    .admin-panel .btn-primary:hover {
      background: #e64b3c;
    }
    .admin-panel .user-info {
      margin-bottom: 20px;
    }
    .admin-panel .user-info p {
      margin: 0;
      padding: 10px;
      background: #f1f1f1;
      border-radius: 5px;
    }
    .footer {
      background: #333;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
  </style>
</head>

<body>
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <a href="index.html" class="logo">
              <h1>Omahku</h1>
            </a>
            <ul class="nav">
              <li><a href="index.html">Beranda</a></li>
              <li><a href="properties.html">Properti</a></li>
              <li><a href="contact.html">Tentang Kami</a></li>
              <li><a href="logout.php">Logout</a></li>
              <li>
                <a href="pesanan.html"><i class="fa fa-calendar"></i>Reservasi</a>
              </li>
            </ul>
            <a class="menu-trigger">
              <span>Menu</span>
            </a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="admin-panel">
      <h2>Admin Panel</h2>
      <div class="user-info">
        <h4>Informasi Pengguna</h4>
        <p>Nama: <?php echo $user['nama']; ?></p>
        <p>Email: <?php echo $user['email']; ?></p>
      </div>
      <a href="manage_users.php" class="btn btn-primary">Kelola Pengguna</a>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <p>Omahku Hostel Yogyakarta</p>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
