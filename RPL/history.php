<?php
session_start();

// Cek apakah pengguna telah login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== 'login') {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari session
$id_user = $_SESSION['id_user'];

$totalItemHistory=0;
    include_once('auth/koneksi.php');
    $user_login=$id_user;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>History</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/cart.jpg" />
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
    <link rel="stylesheet" type="text/css" href="css/produk.css">
    <link rel="stylesheet" type="text/css" href="css/keranjang.css">
    <!--===============================================================================================-->


    <!-- chat crisp -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="70b23ffb-4861-41bd-912d-733680446e18";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script></head>

<body style="overflow: auto;">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <div class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title p-b-49" style="float:">
                        History
                    </span>
                    <div style="height: 598px;">
                    <?php
                        $user_login=$id_user;

                        global $mysqli;
                        $query="SELECT DATE(tanggal_transaksi), nama_obat, harga_obat, tb_transaksi.kode_obat FROM tb_transaksi INNER JOIN tb_obat ON tb_transaksi.kode_obat = tb_obat.kode_obat WHERE id_user='$user_login'";
                        $result=$mysqli->query($query);
        
                        if($result->num_rows > 0){
                    ?>
                            <div class="productCart-list" style="overflow-y: scroll; height: 598px;">
                                <!-- list keranjang mulai dari sini -->
                                <!-- item 1 -->
                                <?php  
                                    while($data=$result->fetch_assoc())
                                    {   $totalItemHistory=$totalItemHistory+1;
                                ?>
                                <div class="productCart-card">
                                    <form method="post" action="auth/aksi.php">
                                        <span>
                                            <img src="gambar/<?php echo $data['kode_obat']; ?>.jpg"
                                                class="productCart-image">
                                            <input type="hidden" name="kode_obat" value="<?php echo $data['kode_obat']; ?>">
                                        </span>
                                        <span>
                                            <p style=" float: right;"><?php echo $data['DATE(tanggal_transaksi)']; ?></p>
                                            <h5 class="card-text" style="text-transform: Capitalize;">
                                                <?php echo $data['nama_obat']; ?>
                                            </h5>
                                            <p class="card-text">Rp.&nbsp
                                                <?php echo $data['harga_obat']; ?>
                                            </p>
                                            <input type="hidden" name="jumlah" value="1">
                                        </span>
                                        <span style="float: right;  margin-top: 20px; margin-bottom: 10px;">
                                            <nav aria-label=" Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <button name="proses" value="bl" class="page-link"
                                                            style="height: 90%; color: green; border: 1px solid green"
                                                            href="#" aria-label="Next"><b>Beli lagi</b></button>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </span>
                                    </form>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <?php
                                }  
                            ?>
                        </div>
                                
                            
                       
                        
                    
                    <span class="login100-form-title p-b-0">
                        <div class="navbar">
                            <a href="Home.php" class="navbar-item">
                                <i class="navbar-icon fa fa-home"></i>
                                <br>Home
                            </a>
                            <a href="History.php" class="navbar-item">
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

                        <!-- </div> -->

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


</body>

</html>