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
                            <center><img src="gambar/artikel 2.jpg" alt="Gambar Obat"
                                    style="width:250px; height:150px;"></center>

                            <div>
                                <center>
                                    <h2><br>Perbedaan Obat Tablet, Kapsul, Kaplet, Pil, Puyer Dan Sirup</h2>
                                </center>

                                <p style="text-align: justify">
                                    <br>Obat merupakan bahan aktif yang telah diakui secara farmatologis yang bisa
                                    mempengaruhi struktur serta fungsi tubuh.
                                    Dalam dunia farmasi, terdapat beragam jenis dan bentuk obat yang dapat diperoleh di
                                    apotek. Ragam jenis dan bentuk obat
                                    tersebut memiliki fungsi yang berbeda antara satu dan yang lainnya, serta ragam
                                    jenis obat tersebut turut digunakan oleh
                                    para dokter dan tenaga medis dalam melakukan diagnosis, penyembuhan juga pencegahan
                                    suatu penyakit.
                                    <br><br>Pengelompokkan obat pada umumnya dilakukan berdasarkan pada kesamaannya,
                                    seperti bentuk atau wujudnya.
                                    Di sisi lain, dalam dunia farmasi, bentuk obat akrab disebut dengan sediaan obat.
                                    Jumlah takaran serta durasi kerja bahan
                                    aktif pada obat hingga diserap oleh tubuh juga dapat berpengaruh pada bentuk sediaan
                                    obat.
                                    Oleh karena itu, penjelasan mengenai bentuk sediaan obat yang umum di masyarakat
                                    adalah sebagai berikut:

                                    <br><br><b>1. Tablet</b>
                                    <br>Bentuk jenis sediaan obat yang paling akrab ditemukan masyarakat adalah tablet
                                    dengan bentuk yang
                                    umum berupa bulat. Obat sediaan tablet umumnya berisi campuran bahan aktif obat dan
                                    zat tambahan
                                    guna memperkuat manfaatnya.
                                    <br><br>Obat sediaan tablet pun memiliki ragam jenisnya, salah satunya adalah tablet
                                    coating atau
                                    tablet salut selaput. Sediaan obat jenis ini juga dibedakan lagi berdasarkan jenis
                                    salut selaput
                                    yang menjadi lapisannya, seperti:
                                    <br>· Tablet salut film
                                    <br>· Tablet salut gula
                                    <br>· Tablet salut enteric
                                    <br><br>Seperti pada umumnya sediaan obat tablet, biasanya diberikan secara oral
                                    atau diminum.
                                    Di sisi lain, beberapa obat jenis sediaan tablet dibedakan berdasarkan pada
                                    pemberian obat,
                                    seperti dihisap, dikunyah ataupun diletakkan di bawah lidah.

                                    <br><br><b>2. Kapsul</b>
                                    <br>Selain jenis sediaan obat tablet, sediaan obat padat yang juga sering dijumpai
                                    masyarakat
                                    adalah kapsul. Obat sediaan kapsul dikemas pada sebuah cangkang dengan bentuk tabung
                                    yang
                                    keras atau lunak dan terbuat dari bahan gelatin atau pati, yang di dalamnya berisi
                                    bahan obat aktif
                                    yang telah dihaluskan.

                                    <br><br><b>3. Kaplet</b>
                                    <br>Bila dilihat dari namanya, jenis sediaan obat kaplet ini merupakan gabungan dari
                                    bentuk kapsul dan
                                    tablet. Kaplet merupakan tablet yang dibungkus dengan lapisan gula dan berwarna
                                    menarik yang berguna
                                    dalam menjaga kelembapan serta kontaminasi ketika di lambung. Kendati demikian, ada
                                    beberapa kaplet
                                    yang tidak dilapisi selaput. Persis seperti tablet, akan tetapi berbentuk panjang
                                    atau lonjong
                                    menyerupai kapsul.

                                    <br><br><b>4. Pil</b>
                                    <br>Pil merupakan sediaan obat yang memiliki bentuk bundar dengan ukuran yang
                                    relatif kecil dengan
                                    variasi pil seperti granulae, pilulae dan boli.

                                    <br><br><b>5. Puyer</b>
                                    <br>Puyer atau serbuk adalah jenis sediaan obat dari campuran kering obat dan zat
                                    kimia yang telah
                                    dihaluskan. Bila obat kapsul dilapisi dengan cangkang, jenis obat sediaan puyer
                                    cenderung dapat
                                    langsung diminum setelah dilarutkan ke dalam air yang tentunya aman bagi lambung.
                                    <br><br>Obat sediaan puyer atau serbuk biasanya terbagi menjadi dua, yaitu serbuk
                                    granulae dan serbuk
                                    effervescent. Obat puyer dapat membantu bagi seseorang yang memiliki kesulitan dalam
                                    mengonsumsi obat.

                                    <br><br><b>6. Sirup</b>
                                    <br>Jenis obat sediaan sirup adalah larutan dari zat kimia obat yang dikombinasikan
                                    dengan larutan gula
                                    sebagai pemanis yang biasa digunakan untuk obat hingga suplemen anak. Bentuk sediaan
                                    obat cair yang
                                    mengandung berbagai zat kimia larut ini pada umumnya diberikan melalui oral ataupun
                                    tropical.
                                    <br><br>Jenis obat cair yang banyak dijumpai yaitu:
                                    <br>· Sirup
                                    <br>· Larutan (solutio)
                                    <br>· Elixir
                                    <br>· Emulsi
                                    <br><br>Tujuan dari klasifikasi atau pengelompokkan obat adalah untuk memastikan
                                    penggunaan obat
                                    yang paling tepat serta aman guna memperoleh manfaat yang maksimal dalam proses
                                    penyembuhan.
                                    <br><br>Dokter akan menentukan jenis obat apa yang paling cocok untuk kondisi
                                    penyakit serta tubuh pasien,
                                    karena hal ini berkaitan dengan kandungan bahan aktif yang dimiliki obat serta
                                    berpotensi
                                    mempengaruhi kondisi tubuh pasien.
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