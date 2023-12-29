<?php
session_start();

// Cek apakah pengguna telah login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== 'login') {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari session
$username = $_SESSION['username'];
$id_user = $_SESSION['id_user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Deskripsi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/artikel.css">
    <link rel="stylesheet" type="text/css" href="css/deskripsi.css">
    <!--===============================================================================================-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="auth/auth.php" method="post">
                    <span class="login100-form-title p-b-49">
                        Artikel
                    </span>

                    <div class="product-list">
                        <div>
                            <center><img src="gambar/artikel 1.jpg" alt="Gambar Obat"
                                    style="width:250px; height:150px;"></center>

                            <div>
                                <center>
                                    <h2><br>Obat Mata Terbaik yang Bisa Kamu Temukan di Apotek</h2>
                                </center>
                                <p style="text-align: justify">
                                    <br>Mata gatal, kering, perih, merah, atau terasa tidak nyaman sering kali membuat
                                    orang jadi merasa terganggu.
                                    Kondisi ini tidak jarang membuat orang secara refleks mengucek mata. Padahal,
                                    tindakan tersebut
                                    bukannya membuat mata membaik, tetapi justru bisa menimbulkan masalah kesehatan.
                                    <br><br>Alih-alih mengucek mata, ada beberapa cara yang bisa dilakukan untuk
                                    mengatasi mata gatal atau perih.
                                    Misalnya saja dengan mengompres mata dengan handuk hangat/air dingin atau
                                    menggunakan obat tetes mata.
                                    <br><br>Obat tetes mata banyak dijual bebas di pasaran. Selain tidak membutuhkan
                                    resep dokter, harga yang
                                    ditawarkan juga tergolong ramah di kantong. Pilihannya juga sangat banyak sehingga
                                    kamu tinggal menyesuaikan dengan kebutuhan. Nah, jika kamu masih bingung obat tetes
                                    mata seperti
                                    apa yang sebaiknya digunakan, simak ulasan berikut ini.
                                    <br><br><br>
                                <h5>Jenis-jenis Obat Tetes Mata</h5>
                                </p>

                                <p style="text-align: justify">
                                    1. Obat Tetes Mata untuk Konjungtivitis serta Infeksi Lain.
                                    <br>2. Obat Tetes Mata Gatal Akibat Alergi.
                                    <br>3. Obat Tetes Mata Merah.
                                    <br>4. Obat Tetes Mata Kering.
                                </p>

                                <br><br>
                                <h5>Pilih Obat Tetes Mata Terbaik yang Sesuai dengan Keluhan.</h5>
                                <p style="text-align: justify">
                                    Ada banyak sekali obat tetes mata yang beredar di pasaran. Masing-masing dari produk
                                    tersebut juga mengandung
                                    bahan aktif yang berbeda-beda dan memiliki manfaat yang juga berbeda. Karena itu,
                                    kamu
                                    perlu mengetahui lebih dulu apakah indikasi penggunaan dari obat tetes mata yang
                                    dibeli sesuai
                                    dengan keluhan yang dialami.
                                    <br><br>Selalu baca petunjuk penggunaan, efek samping, hingga kandungan obat setiap
                                    kali akan membeli obat tetes mata.
                                    Gunakan obat tetes mata sesuai dengan petunjuk penggunaan dan dosis yang tepat. Jika
                                    setelah
                                    digunakan beberapa waktu keluhan tidak kunjung membaik atau justru memburuk, segera
                                    temui dokter
                                    untuk mendapatkan perawatan lebih lanjut.
                                </p>
                            </div>
                        </div>
                    </div>

                    <span class="login100-form-title p-b-0">
                        <div class="navbar">
                            <a href="Home.php" class="navbar-item">
                                <i class="navbar-icon fa fa-home"></i>
                                <br>Home
                            </a>
                            <a href="history.php" class="navbar-item">
                                <i class="navbar-icon fa fa-history"></i>
                                <br>History
                            </a>
                            <a href="keranjang.php" class="navbar-item">
                                <i class="navbar-icon fa fa-cart-shopping"></i>
                                <br>Cart
                            </a>
                            <a href="account.php" class="navbar-item">
                                <i class="navbar-icon fa fa-user"></i>
                                <br>Account
                            </a>
                        </div>

                        <div id="dropDownSelect1"></div>

                        <!--===============================================================================================-->
                        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="vendor/animsition/js/animsition.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="vendor/bootstrap/js/popper.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="vendor/select2/select2.min.js"></script>
                        <!--===============================================================================================-->
                        <script src="vendor/daterangepicker/moment.min.js"></script>
                        <script src="vendor/daterangepicker/daterangepicker.js"></script>
                        <!--===============================================================================================-->
                        <script src="vendor/countdowntime/countdowntime.js"></script>
                        <!--===============================================================================================-->
                        <script src="js/main.js"></script>
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
                        <script src="js/deskripsi.js"></script>
</body>

</html>