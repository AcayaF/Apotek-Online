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
                        H. Super Ester C
                    </span>

                    <div class="product-list">
                        <input type="hidden" name="kode_obat" value="1058">
                        <input type="hidden" name="id_user" value="<?php echo $id_user;?>">
                        <div>
                            <center><img src="gambar/1058.jpg" alt="Gambar Obat"></center>

                            <div>
                                <center>
                                    <h2><br>Holisticare Super Ester C</h2>
                                </center>
                                <br>Rp. 69.000 /Strip<br>
                                <p><br>Stock : 7</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Deskripsi</h2>
                                <p>Holisticare Ester C dapat digunakan untuk meningkatkan daya tahan tubuh keluarga.
                                    Holisticare Ester C aman bagi lambung, karena memiliki tingkat keasaman pH 6,5 yang
                                    mendekati pH air yaitu 7. Holisticare Ester C diproduksi dengan teknologi yang lebih
                                    modern sehingga mengandung metabolit threonate yang dapat diserap oleh tubuh secara
                                    cepat dan kadar askorban dalam Holisticare Ester C dapat bertahan dalam tubuh selama
                                    24 jam, sehingga dapat melindungi tubuh sepanjang hari, dan kadar oksalat yang
                                    dihasilkan rendah dalam urin, sehingga tidak memicu terbentuknya batu ginjal.</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Komposisi</h2>
                                <p>Ester c 320 mg, Citrus bioflavonoid 100 mg, Calcium 32 mg.</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Indikasi Umum</h2>
                                <p>Untuk meningkatkan daya tahan tubuh.</p>
                                <div class="divider"></div>
                            </div>

                            <div>
                                <h2>Aturan Pakai</h2>
                                <p>1 tablet sehari, dapat ditingkatkan menjadi 2-3 tablet sehari jika sedang dalam
                                    proses penyembuhan.</p>
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