<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $koneksi = mysqli_connect("localhost", "root", "", "db_medifarm");
    
    // Periksa koneksi database
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
    
    $result = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($result);
    $data=$result->fetch_assoc();

    if ($cek > 0) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['status'] = "login";

        $home = 'Home.php';
        header("Location: $home");
        exit();
    } else {
        $message = "Username atau password anda salah, silahkan coba lagi";
        echo '<script>alert("' . $message . '");</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V4</title>
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
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <!--===============================================================================================-->
<!-- chat crisp -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="70b23ffb-4861-41bd-912d-733680446e18";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body style="overflow: auto;">

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <span class="login100-form-title p-b-49">
						Login
					</span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <div class="input-icon">
                            <input class="input100" type="password" name="password" placeholder="Type your password">
                            <span class="toggle-icon" onclick="togglePasswordVisibility(this)">
                            <i class="fa fa-eye"></i>
                        </span>
                        </div>
                        <span class="focus-input100" data-symbol="&#xf190;"></span> 
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="forgot password.php">
							Forgot password?
						</a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
								Login
							</button>
                        </div>
                    </div>

                    
                    <div class="flex-col-c p-t-155">
                        <span class="txt1 p-b-17">
                        <center>Don't have an account?</center>
						</span>

                        <a href="sign up.php" class="txt2">
							Sign Up
						</a>
                    </div>
                </form>
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
    <script src="js/register.js"></script>

</body>

</html>