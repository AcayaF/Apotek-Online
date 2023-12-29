<?php
session_start();


if (!isset($_SESSION['status']) || $_SESSION['status'] !== 'login') {
    header("Location: login.php");
    exit();
}

$id_user = $_SESSION['id_user'];

$jml = 0; // Inisialisasi nilai $jml

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['increment'])) {
        $jml += 1;
    } elseif (isset($_POST['decrement'])) {
        if ($jml > 0) {
            $jml -= 1;
        }
    }
}
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
    <link rel="stylesheet" type="text/css" href="css/template desk.css">
    <link rel="stylesheet" type="text/css" href="css/deskripsi.css">
    <!--===============================================================================================-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- chat crisp -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="70b23ffb-4861-41bd-912d-733680446e18";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body style="overflow: auto;">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="auth/aksi.php" method="post">
                    <span class="login100-form-title p-b-49">
                        Mylanta Tablet
                    </span>

                    <div class="product-list">
                        <input type="hidden" name="kode_obat" value="1012">
                        <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
                        <div>
                            <center><img src="gambar/mylanta tablet.jpg" alt="Gambar Obat"
                                    style="width:250px; height:150px;"></center>

                            <div>
                                <center>
                                    <h2><br>Mylanta Tablet</h2>
                                </center>
                                <br>Rp. 10.500 /Strip<br>
                                <p><br>Stock : 6</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Deskripsi</h2>
                                <p>Mylanta merupakan obat yang digunakan untuk mengatasi penyakit-penyakit yang
                                    disebabkan oleh kelebihan produksi asam lambung, seperti sakit maag dan tukak
                                    lambung. Dalam 1 tab Mylanta mengandung : 1. Magnesium Hidroksida berperan sebagai
                                    antasida untuk mengatasi tukak lambung dengan meningkatkan pH asam lambung melalui
                                    reaksi netralisasi. Senyawa ini juga memberikan perlindungan tambahan dari asam
                                    lambung dengan melapisi mukosa lambung menggunakan endapan koloid silika. 2.
                                    Aluminium Hidroksida (Al (OH)3) adalah zat yang bekerja sebagai antasida dengan
                                    bereaksi dengan asam berlebih di dalam lambung sehingga mengurangu gejala ulkus,
                                    mulas atau dyspepsia (maag). 3. Simetikon berfungsi dalam mengurangi kembung,
                                    ketidaknyamanan atau rasa sakit yang disebabkan oleh gas yang berlebihan dalam perut
                                    atau usus.
                                    Obat ini bekerja dengan menurunkan tegangan permukaan gelembung gas sehingga lebih
                                    mudah untuk dikeluarkan.</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Komposisi</h2>
                                <p>Per tablet : Mg(OH)2 200 mg, Al(OH)3 200 mg, Simetikon 20 mg.</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Indikasi Umum</h2>
                                <p>Refluks esofagitis, Rasa panas pada ulu hati, rasa tidak enak pada perut, gastritis,
                                    esofagitis peptikum, & hernia hiatus, kembung (gas), pemeriksaan endoskopik.</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Aturan Pakai</h2>
                                <p>3-4 x sehari 1-2 tablet.</p>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item-container">
                        <label class="quantity-label">Jumlah Item :</label>
                        <div class="quantity-buttons">
                            <button type="button" onclick="decrement()">-</button>
                            <input type="text" id="quantity" class="quantity-input" name="jumlah"
                                value="<?php echo $jml; ?>">
                            <button type="button" onclick="increment()">+</button>
                        </div>
                    </div>

                    <div class="button-container">
                        <button class="add-to-cart-btn" name="proses" value="pesan obat">
                            <img src="images/ker.jpg" alt="Keranjang">
                        </button>

                        <button class="btn btn-primary" name="proses" value="bl">Buy</button>
                    </div>

                    <span class="login100-form-title p-b-0">
                        <div class="navbar">
                            <a href="home.php" class="navbar-item">
                                <i class="navbar-icon fa fa-home"></i>
                                <br>Home
                            </a>
                            <a href="history.php" class="navbar-item">
                                <i class="navbar-icon fa fa-history"></i>
                                <br>History
                            </a>
                            <a href="keranjang.php" class="navbar-item">
                                <i class="navbar-icon"><img src="images/ker.jpg" style="width: 23px;"></i>
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

                        <script>
                            function increment() {
                                var quantityInput = document.getElementById('quantity');
                                var quantity = parseInt(quantityInput.value);
                                quantityInput.value = quantity + 1;
                            }

                            function decrement() {
                                var quantityInput = document.getElementById('quantity');
                                var quantity = parseInt(quantityInput.value);
                                if (quantity > 0) {
                                    quantityInput.value = quantity - 1;
                                }
                            }

                            
                        </script>

</body>

</html>