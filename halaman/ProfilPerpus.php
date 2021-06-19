<?php
session_start();
include "../proses/koneksiDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="../DefaultCSS.css">
    <link rel="stylesheet" type="text/css" href="../styleCSS.css">
    <script type="text/JavaScript" src="../jquery-3.6.0.min.js"></script>
    <script src="https:/kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Montserrat&display=swap" rel="stylesheet">
    <title>Profile Perpustakaan</title>
</head>

<body>
    <div class="heading">
        <div>
            <h4>Perpustakaan</h4>
        </div>
        <ul>            
            <li>
                <p>Tanggal: <span id="tanggalwaktu"></span></p>
            </li>
            <li class="nm"><span>Akun: <?= $_SESSION['name'] ?></span> <i class="fa fa-angle-down"></i></li>
        </ul>
    </div>
    <a href="../proses/SessionLogout.php"><input class="mdd" type="button" value="Log Out"></a>
    <nav>
        <ul>
            <div class="menu"></div>
            <li><a href="../halaman/HalamanUtama.php"><i class="fas fa-home"></i><span>Dashboard</span></a></li>
            <li><a href="../halaman/ProfilPerpus.php"><i class="fas fa-user"></i><span>Profil Perpustakaan</span></a></li>
            <li><a href="../halaman/KatalogBuku.php"><i class="fas fa-book"></i><span>Katalog Buku</span></a></li>
            <li><a href="../halaman/Peminjaman.php"><i class="fas fa-pen"></i><span>Peminjaman</span></a></li>
        </ul>
    </nav>
    <!-- Banner -->
    <section class="ban">
        <h1>WELCOME TO LIBRARY</h1>
    </section>
    <!-- About -->
    <section class="about">
        <div>
            <h2>ABOUT</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                book. It has survived not only
                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
            </p>
            <h2>VISI</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                industry's standard dummy text ever
                since the 1500s.
            </p>
            <h2>MISI</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the
                industry's standard dummy text ever
                since the 1500s.
            </p>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact">
        <div>
            <h2>CONTACT INFO</h2>
            <div class="box">
                <div class="col-4">
                    <h3>Address</h3>
                    <p>Jl. Nin Aja Dulu</p>
                </div>
                <div class="col-4">
                    <h3>Email</h3>
                    <p>perpustakaan@gmail.com</p>
                </div>
                <div class="col-4">
                    <h3>Tlp</h3>
                    <p>(031) 30303030</p>
                </div>
            </div>
        </div>
    </section>
    <!-- COPYRIGHT -->
    <section class="copyright">
        <h3>Copyright &#169; 2021 - AFADA & WALDAN </h3>
    </section>
    <script src="../script.js"></script>
</body>

</html>