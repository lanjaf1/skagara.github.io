<?php
// koneksi ke database
include 'konek.php';

// Query untuk mengambil semua data user
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKAGARA</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="navbar.css" />
</head>
<body>
        <!-- Navbar start -->
        <nav class="navbar">
        <div class="navbar-logo-container">
        <img src="croppedpng.png" class="navbar-logo-image">
            <a href="#" class="navbar-logo">SMKN<span> 3</span> Jepara</a>
        </div>

        <div class="navbar-nav">
            <a href="siswa/index.php">Siswa</a>
            <a href="kelas/index.php">Kelas</a>
            <a href="jurusan/index.php">Jurusan</a>
        </div>

      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
</nav>
          <!-- Hero Section start -->
    <section class="hero" id="home">
      <div class="mask-container">
      <main class="content">


        <h1>Sekolah Menengah Kejuruan <span>3 </span> Jepara</h1>
        <p>
          (Maju Bersama Jaya)
        </p>
       <!-- <a href="Form pembayaran/pembayaran.html" class="cta" onclick >Beli Sekarang</a> -->
      </main>
    </div>
    </section>
    <!-- Hero Section end -->
        <!-- Feather Icons -->
        <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="smkn.js"></script>
</body>
</html>