<?php
session_start();

// Cek apakah pengguna telah login
if (!isset($_SESSION['status']) || $_SESSION['status'] !== 'login') {
    header("Location: login.php");
    exit();
}

// Ambil data pengguna dari session
$id_user = $_SESSION['id_user'];

include_once('auth/koneksi.php');
global $mysqli;

$query="SELECT * FROM tb_user WHERE id_user='$id_user'";
$result=$mysqli->query($query);

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
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
                <form class="login100-form validate-form" action="auth/auth.php" method="post">
                    <span class="login100-form-title p-b-49">
						Profile
					</span>
                  
                    <ul class="list-group list-group-flush">
                        <a href="#" class="list-group-item">Name<br><?php echo $data['username']; ?><br></a>
                        <a href="#" class="list-group-item">Password<br>*****<br></a>   
                        <a href="#" class="list-group-item">Email<br><?php echo $data['email']; ?><br></a>
                        <a href="#" class="list-group-item">Number Phone<br><?php echo $data['number_phone']; ?><br></a>
                    </ul>
                    
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <span class="login100-from-title p-b-0">
                        <div class="navbar">
                          <a href="Home.php" class="navbar-item">
                            <i class="navbar-icon fa fa-home" style="margin-left: 12px;"></i>
                          <br>Home
                          </a>
                          <a href="history.php" class="navbar-item">
                            <i class="navbar-icon fa fa-history" style="margin-left: 14px;"></i>
                            <br>History
                          </a>
                          <a href="chat.php" class="navbar-item">
                            <i class="navbar-icon" style="margin-left: 4px;"><img src="images/ker.jpg" style="width: 23px;"></i>
                            <br>Chat
                          </a>
                          <a href="account.php" class="navbar-item">
                            <i class="navbar-icon fa fa-user" style="margin-left: 20px;"></i>
                            <br>Account
                          </a>
                        </div>
                      </span>
            </div>
        </div>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</body>

</html>
