<?php
session_start();

// Cek apakah pengguna telah login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== 'login') {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari session
$id_user = $_SESSION['id_user'];

$totalItemKeranjang=0;
    include_once('auth/koneksi.php');
    $user_login=$id_user;

    global $mysqli;
    $query1="SELECT * FROM tb_keranjang INNER JOIN tb_obat ON tb_keranjang.kode_obat = tb_obat.kode_obat WHERE id_user='$user_login' AND status='belum dibeli'";
    $result1=$mysqli->query($query1);
    if($result1->num_rows > 0){
        while($data1=$result1->fetch_assoc()){ $totalItemKeranjang=$totalItemKeranjang+1; }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Keranjang</title>
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

    <script>
        function toggleCollapse() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var collapseElement = document.getElementById("collapse");

            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    collapseElement.style.display = "block";
                    return;
                }
            }

            collapseElement.style.display = "none";
        }

        function getCheckedItems() {
            var checkboxes = document.querySelectorAll('input[name="listCheckbox"]:checked');
            var checkedItems = [];

            for (var i = 0; i < checkboxes.length; i++) {
                checkedItems.push(checkboxes[i].value);
            }

            return checkedItems;
        }

        function checkout() {
            var checkedItems = getCheckedItems();

            if (checkedItems.length > 0) {
                var url = "checkout.php?kode_obat=" + checkedItems.join(",");
                window.location.href = url;
            }
        }
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- chat crisp -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="70b23ffb-4861-41bd-912d-733680446e18";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body style="overflow: auto;">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="auth/auth.php" method="post">
                    <span class="login100-form-title p-b-49" style="text-align: left;">
                        <span>My Cart&nbsp;</span>
                        <span style="color: grey;">(
                            <?php echo $totalItemKeranjang; ?>)
                        </span>
                    </span>

                    <div style="height: 598px;">
                        <?php
                            $user_login=$id_user;

                            global $mysqli;
                            $query="SELECT * FROM tb_keranjang INNER JOIN tb_obat ON tb_keranjang.kode_obat = tb_obat.kode_obat WHERE id_user='$user_login' AND status='belum dibeli'";
                            $result=$mysqli->query($query);
                            ?>

                        <?php
                            if($result->num_rows > 0){
                                ?>
                        <div class="productCart-list" style="overflow-y: scroll;">
                            <!-- list keranjang mulai dari sini -->
                            <!-- item 1 -->
                            <?php  
                                while($data=$result->fetch_assoc())
                                {   $totalItemKeranjang=$totalItemKeranjang+1;
                            ?>
                            <div class="productCart-card">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <span>
                                        <img src="gambar/<?php echo $data['kode_obat']; ?>.jpg"
                                            class="productCart-image">
                                    </span>
                                    <span>
                                        <input type="checkbox" style="width: 25px; height: 25px; float: right;"
                                            name="checkBox2" data-toggle="collapse" data-target="#collapseExample"
                                            aria-expanded="false" aria-controls="collapseExample" name="listCheckbox[]"
                                            value="<?php echo $data['id_keranjang']; ?>" onclick="MytoggleCollapse()">
                                        <h5 class="card-text" style="text-transform: Capitalize;">
                                            <?php echo $data['nama_obat']; ?>
                                        </h5>
                                        <p class="card-text">Rp.&nbsp
                                            <?php echo $data['harga_obat']; ?>
                                        </p>
                                    </span>
                                    <span style="float: right;  margin-top: 20px;">
                                        <nav aria-label=" Page navigation example">
                                            <ul class="pagination">
                                                <li>
                                                    <a
                                                        href="auth/aksi.php?id_keranjang=<?=$data['id_keranjang']?>&proses=hk"><img
                                                            src="images/trash.png"
                                                            style="width: 20px; margin-right: 15px; margin-top: 7px;"></img></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="auth/aksi.php?id_keranjang=<?=$data['id_keranjang']?>&proses=kurang"
                                                        class="page-link" style="height: 90%;"
                                                        aria-label="Previous">-</a>
                                                </li>
                                                <li class="page-item">
                                                    <div class="page-link" style="height: 90%;">
                                                        <input name="jumlah" style="width: 20px;"
                                                            value="<?php echo $data['jml_item'] ?>">
                                                    </div>
                                                </li>
                                                <li class="page-item">
                                                    <a href="auth/aksi.php?id_keranjang=<?=$data['id_keranjang']?>&proses=tambah"
                                                        class="page-link" style="height: 90%;" href="#"
                                                        aria-label="Next">+</a>
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
                            <div class="collapse" id="collapse">
                            <button class="login100-form-btn checkoutCollapse" style="margin-top: 30px;" type="button"
                                onclick="checkout()">CHECKOUT</button>
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

    <script>
        function MytoggleCollapse() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var collapseElement = document.getElementById("collapse");

            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    collapseElement.style.display = "block";
                    return;
                }
            }

            collapseElement.style.display = "none";
        }

        function checkout() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var checkedItems = [];

            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    checkedItems.push(checkboxes[i].value);
                }
            }

            var encodedItems = encodeURIComponent(JSON.stringify(checkedItems));
            window.location.href = "checkout.php?items=" + encodedItems;
        }
    </script>


</body>

</html>