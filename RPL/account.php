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
    <title>Home</title>
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
    <link rel="stylesheet" type="text/css" href="css/produk.css">
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
                <form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <span class="login100-form-title p-b-49">
                        Account
                    </span>

                    <div style="height: 550px; overflow-y: unset;">
                        <ul class="list-group list-group-flush">
                            <a href="profilev2.php" class="list-group-item"
                                style="border: 0; color: black; margin: 9px; padding: 0px;">Profile</a>
                            <a href="voucher.php" class="list-group-item"
                                style="border: 0; color: black; margin: 9px; padding: 0px;">Voucher</a>
                            <a href="chat.php" class="list-group-item"
                                style="border: 0; color: black; margin: 9px; padding: 0px;">Help</a>
                            <a class="list-group-item"
                                style="border: 0; color: black; margin: 9px; padding: 0px;"><button type="submit">Log
                                    Out</button></a>
                        </ul>
                    </form>
                            <?php 
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            session_destroy();
                      
                           
                            }
                        ?>

                    </div>
                    <br><br>

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

</body>

</html>