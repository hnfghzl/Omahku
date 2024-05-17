<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <title>Login - Omahku Hostel</title>
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

    .login-form {
      width: 100%;
      max-width: 400px;
      padding: 30px;
      margin: 50px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .login-form:hover {
      transform: translateY(-10px);
    }

    .login-form h2 {
      margin-bottom: 30px;
      color: #333;
      text-align: center;
    }

    .login-form .form-group label {
      color: #555;
    }

    .login-form .form-control {
      border-radius: 20px;
      background: #f1f1f1;
      border: none;
      box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .login-form .btn-primary {
      border-radius: 20px;
      background: #ff6f61;
      border: none;
      padding: 10px;
      width: 100%;
      transition: background 0.3s ease-in-out;
    }

    .login-form .btn-primary:hover {
      background: #e64b3c;
    }

    .login-form .text-center a {
      color: #ff6f61;
      text-decoration: none;
      transition: color 0.3s ease-in-out;
    }

    .login-form .text-center a:hover {
      color: #e64b3c;
      text-decoration: underline;
    }

    .login-form .logo {
      display: block;
      margin: 0 auto 20px;
      text-align: center;
    }

    .login-form .logo img {
      width: 100px;
    }

    .sub-header {
      background: #333;
      padding: 10px 0;
      color: #fff;
    }

    .sub-header .info li {
      display: inline;
      margin-right: 20px;
      color: #fff;
    }

    .header-area {
      background: #fff;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .header-area .logo h1 {
      color: #ff6f61;
    }

    .header-area .nav li a {
      color: #333;
    }

    .header-area .nav li a:hover {
      color: #ff6f61;
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
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> Hanifhanati700@gmail.com</li>
            <li>
              <i class="fa fa-map"></i> Timuran No.171, Kota Yogyakarta,
              Daerah Istimewa Yogyakarta 55153
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

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
              <li><a href="login.php">Login</a></li>
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
    <div class="login-form">
      <div class="logo">
        <img src="assets/images/Logo.png" alt="Omahku Hostel" />
      </div>
      <h2>Omahku Hostel</h2>
      <form action="properties.html" method="post">
      <input type="hidden" name="action" value="login">
        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required />
        </div>
        <div class="form-group">
          <label for="password">Kata Sandi</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi"
            required />
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
      <div class="text-center">
        <p>Belum punya akun? <a href="daftar.php">Daftar Akun</a></p>
      </div>
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