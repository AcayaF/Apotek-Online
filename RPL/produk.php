<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Products</title>
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

<!-- chat crisp -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="70b23ffb-4861-41bd-912d-733680446e18";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>

<body style="overflow: auto;">
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
                        All Products
                    </span>

                    <!-- input search  -->
                    <center>
                        <form action="produk.php" method="GET" name="search">
                            <input type="text"  name="inputsearch" placeholder="Cari Produk" ">
                            <button type="submit" value="cari" name="cari" class="btn-primary"">Cari Produk</button>
                            <br>
                        </form>
                    </center>

                    <?php
                    if (isset($_GET['cari'])){
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                                $koneksi = mysqli_connect("localhost", "root", "", "db_medifarm");

                                // Periksa koneksi database
                                if (!$koneksi) {
                                    die("Koneksi database gagal: " . mysqli_connect_error());
                                }
                                $nama_obat = $_GET['inputsearch'];

                                $result = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE nama_obat='$nama_obat'");
                                $cek = mysqli_num_rows($result);
                                $data=$result->fetch_assoc();

                                if($cek > 0){
                                    if($_GET['inputsearch'] == $data['nama_obat']){
                                        $tampil = $_GET['inputsearch'];
                                        if($_GET['inputsearch'] == "sunmol tablet"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="sunmol tablet" method="GET">
                                                <img class="product-image" src="gambar/sunmol tablet.jpg" alt="Product 1">
                                                <div class="product-info">
                                                    <div class="product-title">Sanmol Tablet</div>
                                                        <div class="product-price">Rp. 2.000 /Strip</div>
                                                            <center><a href="dSanmol Tablet.php" class="btn btn-primary">Buy Now</a></center>
                                                    </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "paractamol pim"){
                                            ?>
                                            <div class="product-card" >
                                                <form action="produk.php" name="paractamol pim" method="GET">
                                                <img class="product-image" src="gambar/paraceatmol pim.jpg" alt="Product 2">
                                                <div class="product-info">
                                                    <div class="product-title">Paracetamol Pim</div>
                                                    <div class="product-price">Rp. 3.500 /Strip</div>
                                                    <center><a href="dParacetamol Pim.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "panadol biru"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="panadol biru" method="GET">
                                                <img class="product-image" name="panadol biru" src="gambar/panadol biru.jpg" alt="Product 3">
                                                <div class="product-info">
                                                    <div class="product-title">Panadol Biru</div>
                                                    <div class="product-price">Rp. 12.000 /Strip</div>
                                                    <center><a href="dPanadol Biru.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "trimafol forte"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="trimafol forte" method="GET">
                                                <img class="product-image" src="gambar/Trimafol Forte.jpg" alt="Product 4">
                                                <div class="product-info">
                                                    <div class="product-title">Trimafol Forte</div>
                                                    <div class="product-price">Rp. 4.500 /Strip</div>
                                                    <center><a href="dTrimafol Forte.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "buffet tablet"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="buffet tablet" method="GET">
                                                <img class="product-image" src="gambar/buffet tablet.jpg" alt="Product 5">
                                                <div class="product-info">
                                                    <div class="product-title">Buffect Tablet</div>
                                                    <div class="product-price">Rp. 4.000 /Strip</div>
                                                    <center><a href="dBuffect Tablet.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "procold flu & batuk"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="procold flu & batuk" method="GET">
                                                <img class="product-image" src="gambar/procold.png" alt="Product 6">
                                                <div class="product-info">
                                                    <div class="product-title">Procold Flu & Batuk</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dProcold Flu & Batuk.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "siladex cough & cold sirup"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="siladex cough & cold sirup" method="GET">
                                                <img class="product-image" src="gambar/Siladex Cough _ Cold Sirup.png" alt="Product 7">
                                                <div class="product-info">
                                                    <div class="product-title">Siladex Cough & Cold Sirup</div>
                                                    <div class="product-price">Rp. 22.000 /Botol</div>
                                                    <center><a href="dSiladex Cough & Cold Sirup.php" class="btn btn-primary">Buy Now</a>
                                                    </center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "decolgen flu"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="decolgen flu" method="GET">
                                                <img class="product-image" src="gambar/decolgen flu.jpeg" alt="Product 8">
                                                <div class="product-info">
                                                    <div class="product-title">Decolgen Flu</div>
                                                    <div class="product-price">Rp. 2.500 /Strip</div>
                                                    <center><a href="dDecolgen Flu.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "konidin"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="konidin" method="GET">
                                                <img class="product-image" src="gambar/konidin.jpg" alt="Product 9">
                                                <div class="product-info">
                                                    <div class="product-title">Konidin</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dKonidin.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "inza"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="inza" method="GET">
                                                <img class="product-image" src="gambar/inza.jpeg" alt="Product 10">
                                                <div class="product-info">
                                                    <div class="product-title">Inza</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dInza.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "omeprazole"){
                                            ?>
                                            <div class="product-card">
                                            <form action="produk.php" name="omeprazole" method="GET">
                                            <img class="product-image" src="gambar/omeprazole.jpg" alt="Product 11">
                                            <div class="product-info">
                                                <div class="product-title">Omeprazole</div>
                                                <div class="product-price">Rp. 6.000 /Strip</div>
                                                <center><a href="dOmeprazole.php" class="btn btn-primary">Buy Now</a></center>
                                            </div>
                                            </form>
                                        </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "mylanta tablet"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="mylanta tablet" method="GET">
                                                <img class="product-image" src="gambar/mylanta tablet.jpg" alt="Product 12">
                                                <div class="product-info">
                                                    <div class="product-title">Mylanta Tablet</div>
                                                    <div class="product-price">Rp. 10.500 /Strip</div>
                                                    <center><a href="dMylanta Tablet.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "promag"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="promag" method="GET">
                                                <img class="product-image" src="gambar/promag.jpg" alt="Product 13">
                                                <div class="product-info">
                                                    <div class="product-title">Promag</div>
                                                    <div class="product-price">Rp. 7.500 /Strip</div>
                                                    <center><a href="dPromag.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "polysilane sirup"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="polysilane sirup" method="GET">
                                                <img class="product-image" src="gambar/polysilane sirup.jpeg" alt="Product 14">
                                                <div class="product-info">
                                                    <div class="product-title">Polysilane Sirup</div>
                                                    <div class="product-price">Rp. 27.000 /Botol</div>
                                                    <center><a href="dPolysilane Sirup.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "simvastatin"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="simvastatin" method="GET">
                                                <img class="product-image" src="gambar/simvastatin.jpg" alt="Product 15">
                                                <div class="product-info">
                                                    <div class="product-title">Simvastatin</div>
                                                    <div class="product-price">Rp. 11.000 /Strip</div>
                                                    <center><a href="dSimvastatin.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "pravastatin novell"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="pravastatin novell" method="GET">
                                                <img class="product-image" src="gambar/pravastatin novell.jpeg" alt="Product 16">
                                                <div class="product-info">
                                                    <div class="product-title">Pravastatin Novell</div>
                                                    <div class="product-price">Rp. 39.000 /Strip</div>
                                                    <center><a href="dPravastatin Novell.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "lipitor"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="lipitor" method="GET">
                                                <img class="product-image" src="gambar/lipitor.png" alt="Product 17">
                                                <div class="product-info">
                                                    <div class="product-title">Lipitor</div>
                                                    <div class="product-price">Rp. 250.000 /Strip</div>
                                                    <center><a href="dLipitor.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "acarbose"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="acarbose" method="GET">
                                                <img class="product-image" src="gambar/acarbose.jpg" alt="Product 18">
                                                <div class="product-info">
                                                    <div class="product-title">Acarbose</div>
                                                    <div class="product-price">Rp. 15.000 /Strip</div>
                                                    <center><a href="dAcarbose.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "glucophage"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="glucophage" method="GET">
                                                <img class="product-image" src="gambar/glucophage.jpeg" alt="Product 19">
                                                <div class="product-info">
                                                    <div class="product-title">Glucophage</div>
                                                    <div class="product-price">Rp. 25.000 /Strip</div>
                                                    <center><a href="dGlucophage.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "metrix"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="metrix" method="GET">   
                                                <img class="product-image" src="gambar/metrix.jpeg" alt="Product 20">
                                                <div class="product-info">
                                                    <div class="product-title">Metrix</div>
                                                    <div class="product-price">Rp. 80.000 /Strip</div>
                                                    <center><a href="dMetrix.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "festaric"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="festaric" method="GET">
                                                <img class="product-image" src="gambar/festaric.jpg" alt="Product 21">
                                                <div class="product-info">
                                                    <div class="product-title">Festaric</div>
                                                    <div class="product-price">Rp. 61.000 /Strip</div>
                                                    <center><a href="dFestaric.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "recolfar"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="recolfar" method="GET">
                                                <img class="product-image" src="gambar/recolfar.jpg" alt="Product 22">
                                                <div class="product-info">
                                                    <div class="product-title">Recolfar</div>
                                                    <div class="product-price">Rp. 88.000 /Strip</div>
                                                    <center><a href="dRecolfar.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "paramex"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="paramex" method="GET">
                                                <img class="product-image" src="gambar/paramex.jpg" alt="Product 25">
                                                <div class="product-info">
                                                    <div class="product-title">Paramex</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dParamex.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "oskadon"){
                                            ?>
                                            <div class="product-card">
                                                    <form action="produk.php" name="oskadon" method="GET">
                                                    <img class="product-image" src="gambar/oskadon.png" alt="Product 26">
                                                    <div class="product-info">
                                                        <div class="product-title">Oskadon</div>
                                                        <div class="product-price">Rp. 2.500 /Strip</div>
                                                        <center><a href="dOskadon.php" class="btn btn-primary">Buy Now</a></center>
                                                    </div>
                                                    </form>
                                                </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "panadol extra"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="panadol extra" method="GET">
                                                <img class="product-image" src="gambar/panadol extra.png" Product 27">
                                                <div class="product-info">
                                                    <div class="product-title">Panadol Extra</div>
                                                    <div class="product-price">Rp. 15.000 /Strip</div>
                                                    <center><a href="dPanadol Extra.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "bodrex migra"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="bodrex migra" method="GET">
                                                <img class="product-image" src="gambar/bodrex migra.png" alt="Product 28">
                                                <div class="product-info">
                                                    <div class="product-title">Bodrex Migra</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dBodrex Migra.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "proris"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="proris" method="GET">
                                                <img class="product-image" src="gambar/proris.png" alt="Product 29">
                                                <div class="product-info">
                                                    <div class="product-title">Proris</div>
                                                    <div class="product-price">Rp. 10.000 /Strip</div>
                                                    <center><a href="dProris.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "termofen sirup"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="termofen sirup" method="GET">
                                                <img class="product-image" src="gambar/termofen sirup.jpg" alt="Product 30">
                                                <div class="product-info">
                                                    <div class="product-title">Termofen Sirup</div>
                                                    <div class="product-price">Rp. 30.000 /Botol</div>
                                                    <center><a href="dTermofen Sirup.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "entrostop"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="entrostop" method="GET">
                                                <img class="product-image" src="gambar/entrostop.jpg" alt="Product 31">
                                                <div class="product-info">
                                                    <div class="product-title">Entrostop</div>
                                                    <div class="product-price">Rp. 8.500 /Strip</div>
                                                    <center><a href="dEntrostop.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "diapet"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="diapet" method="GET">
                                                <img class="product-image" src="gambar/diapet.jpeg" alt="Product 32">
                                                <div class="product-info">
                                                    <div class="product-title">Diapet</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dDiapet.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "diatabs"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="diatabs" method="GET">
                                                <img class="product-image" src="gambar/diatabs.jpg" alt="Product 33">
                                                <div class="product-info">
                                                    <div class="product-title">Diatabs</div>
                                                    <div class="product-price">Rp. 3.000 /Strip</div>
                                                    <center><a href="dDiatabs.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "dentasol"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="dentasol" method="GET">
                                                <img class="product-image" src="gambar/dentasol.jpg" alt="Product 34">
                                                <div class="product-info">
                                                    <div class="product-title">Dentasol</div>
                                                    <div class="product-price">Rp. 17.500 /Botol</div>
                                                    <center><a href="dDentasol.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "ponstan"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="ponstan" method="GET">
                                                <img class="product-image" src="gambar/ponstan.jpeg" alt="Product 35">
                                                <div class="product-info">
                                                    <div class="product-title">Ponstan</div>
                                                    <div class="product-price">Rp. 40.000 /Strip</div>
                                                    <center><a href="dPonstan.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "cataflam"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="cataflam" method="GET">
                                                <img class="product-image" src="gambar/cataflam.jpeg" alt="Product 36">
                                                <div class="product-info">
                                                    <div class="product-title">Cataflam</div>
                                                    <div class="product-price">Rp. 70.000 /Strip</div>
                                                    <center><a href="dCataflam.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }elseif($_GET['inputsearch'] == "asam mefenamat"){
                                            ?>
                                            <div class="product-card">
                                                <form action="produk.php" name="asam mefenamat" method="GET">
                                                <img class="product-image" src="gambar/asam mefenamat.jpg" alt="Product 37">
                                                <div class="product-info">
                                                    <div class="product-title">Asam Mefenamat</div>
                                                    <div class="product-price">Rp. 4.000 /Strip</div>
                                                    <center><a href="dAsam Mefenamat.php" class="btn btn-primary">Buy Now</a></center>
                                                </div>
                                                </form>
                                            </div>
                                            <?php
                                        }
                                    }
                                }else {
                                    $message = "Barang tidak tersedia";
                                    echo '<script>alert("' . $message . '");</script>';
                                }
                            } 
                        }

                    ?>
                    
                        
                    <div class="product-list">
                    
                        <div class="product-card">
                        <form action="produk.php" name="sunmol tablet" method="GET">
                            <img class="product-image" src="gambar/sunmol tablet.jpg" alt="Product 1">
                            <div class="product-info">
                                <div class="product-title">Sanmol Tablet</div>
                                <div class="product-price">Rp. 2.000 /Strip</div>
                                <center><a href="dSanmol Tablet.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card" >
                            <form action="produk.php" name="paractamol pim" method="GET">
                            <img class="product-image" src="gambar/paraceatmol pim.jpg" alt="Product 2">
                            <div class="product-info">
                                <div class="product-title">Paracetamol Pim</div>
                                <div class="product-price">Rp. 3.500 /Strip</div>
                                <center><a href="dParacetamol Pim.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="panadol biru" method="GET">
                            <img class="product-image" name="panadol biru" src="gambar/panadol biru.jpg" alt="Product 3">
                            <div class="product-info">
                                <div class="product-title">Panadol Biru</div>
                                <div class="product-price">Rp. 12.000 /Strip</div>
                                <center><a href="dPanadol Biru.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="trimafol forte" method="GET">
                            <img class="product-image" src="gambar/Trimafol Forte.jpg" alt="Product 4">
                            <div class="product-info">
                                <div class="product-title">Trimafol Forte</div>
                                <div class="product-price">Rp. 4.500 /Strip</div>
                                <center><a href="dTrimafol Forte.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="buffet tablet" method="GET">
                            <img class="product-image" src="gambar/buffet tablet.jpg" alt="Product 5">
                            <div class="product-info">
                                <div class="product-title">Buffect Tablet</div>
                                <div class="product-price">Rp. 4.000 /Strip</div>
                                <center><a href="dBuffect Tablet.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="procold flu & batuk" method="GET">
                            <img class="product-image" src="gambar/procold.png" alt="Product 6">
                            <div class="product-info">
                                <div class="product-title">Procold Flu & Batuk</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dProcold Flu & Batuk.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="siladex cough & cold sirup" method="GET">
                            <img class="product-image" src="gambar/Siladex Cough _ Cold Sirup.png" alt="Product 7">
                            <div class="product-info">
                                <div class="product-title">Siladex Cough & Cold Sirup</div>
                                <div class="product-price">Rp. 22.000 /Botol</div>
                                <center><a href="dSiladex Cough & Cold Sirup.php" class="btn btn-primary">Buy Now</a>
                                </center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="decolgen flu" method="GET">
                            <img class="product-image" src="gambar/decolgen flu.jpeg" alt="Product 8">
                            <div class="product-info">
                                <div class="product-title">Decolgen Flu</div>
                                <div class="product-price">Rp. 2.500 /Strip</div>
                                <center><a href="dDecolgen Flu.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="konidin" method="GET">
                            <img class="product-image" src="gambar/konidin.jpg" alt="Product 9">
                            <div class="product-info">
                                <div class="product-title">Konidin</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dKonidin.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="inza" method="GET">
                            <img class="product-image" src="gambar/inza.jpeg" alt="Product 10">
                            <div class="product-info">
                                <div class="product-title">Inza</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dInza.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="omeprazole" method="GET">
                            <img class="product-image" src="gambar/omeprazole.jpg" alt="Product 11">
                            <div class="product-info">
                                <div class="product-title">Omeprazole</div>
                                <div class="product-price">Rp. 6.000 /Strip</div>
                                <center><a href="dOmeprazole.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="mylanta tablet" method="GET">
                            <img class="product-image" src="gambar/mylanta tablet.jpg" alt="Product 12">
                            <div class="product-info">
                                <div class="product-title">Mylanta Tablet</div>
                                <div class="product-price">Rp. 10.500 /Strip</div>
                                <center><a href="dMylanta Tablet.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="promag" method="GET">
                            <img class="product-image" src="gambar/promag.jpg" alt="Product 13">
                            <div class="product-info">
                                <div class="product-title">Promag</div>
                                <div class="product-price">Rp. 7.500 /Strip</div>
                                <center><a href="dPromag.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="polysilane sirup" method="GET">
                            <img class="product-image" src="gambar/polysilane sirup.jpeg" alt="Product 14">
                            <div class="product-info">
                                <div class="product-title">Polysilane Sirup</div>
                                <div class="product-price">Rp. 27.000 /Botol</div>
                                <center><a href="dPolysilane Sirup.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="simvastatin" method="GET">
                            <img class="product-image" src="gambar/simvastatin.jpg" alt="Product 15">
                            <div class="product-info">
                                <div class="product-title">Simvastatin</div>
                                <div class="product-price">Rp. 11.000 /Strip</div>
                                <center><a href="dSimvastatin.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="pravastatin novell" method="GET">
                            <img class="product-image" src="gambar/pravastatin novell.jpeg" alt="Product 16">
                            <div class="product-info">
                                <div class="product-title">Pravastatin Novell</div>
                                <div class="product-price">Rp. 39.000 /Strip</div>
                                <center><a href="dPravastatin Novell.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="lipitor" method="GET">
                            <img class="product-image" src="gambar/lipitor.png" alt="Product 17">
                            <div class="product-info">
                                <div class="product-title">Lipitor</div>
                                <div class="product-price">Rp. 250.000 /Strip</div>
                                <center><a href="dLipitor.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="acarbose" method="GET">
                            <img class="product-image" src="gambar/acarbose.jpg" alt="Product 18">
                            <div class="product-info">
                                <div class="product-title">Acarbose</div>
                                <div class="product-price">Rp. 15.000 /Strip</div>
                                <center><a href="dAcarbose.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="glucophage" method="GET">
                            <img class="product-image" src="gambar/glucophage.jpeg" alt="Product 19">
                            <div class="product-info">
                                <div class="product-title">Glucophage</div>
                                <div class="product-price">Rp. 25.000 /Strip</div>
                                <center><a href="dGlucophage.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="metrix" method="GET">   
                            <img class="product-image" src="gambar/metrix.jpeg" alt="Product 20">
                            <div class="product-info">
                                <div class="product-title">Metrix</div>
                                <div class="product-price">Rp. 80.000 /Strip</div>
                                <center><a href="dMetrix.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="festaric" method="GET">
                            <img class="product-image" src="gambar/festaric.jpg" alt="Product 21">
                            <div class="product-info">
                                <div class="product-title">Festaric</div>
                                <div class="product-price">Rp. 61.000 /Strip</div>
                                <center><a href="dFestaric.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="recolfar" method="GET">
                            <img class="product-image" src="gambar/recolfar.jpg" alt="Product 22">
                            <div class="product-info">
                                <div class="product-title">Recolfar</div>
                                <div class="product-price">Rp. 88.000 /Strip</div>
                                <center><a href="dRecolfar.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="paramex" method="GET">
                            <img class="product-image" src="gambar/paramex.jpg" alt="Product 25">
                            <div class="product-info">
                                <div class="product-title">Paramex</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dParamex.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="oskadon" method="GET">
                            <img class="product-image" src="gambar/oskadon.png" alt="Product 26">
                            <div class="product-info">
                                <div class="product-title">Oskadon</div>
                                <div class="product-price">Rp. 2.500 /Strip</div>
                                <center><a href="dOskadon.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="panadol extra" method="GET">
                            <img class="product-image" src="gambar/panadol extra.png" Product 27">
                            <div class="product-info">
                                <div class="product-title">Panadol Extra</div>
                                <div class="product-price">Rp. 15.000 /Strip</div>
                                <center><a href="dPanadol Extra.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>

                        <div class="product-card">
                            <form action="produk.php" name="bodrex migra" method="GET">
                            <img class="product-image" src="gambar/bodrex migra.png" alt="Product 28">
                            <div class="product-info">
                                <div class="product-title">Bodrex Migra</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dBodrex Migra.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="proris" method="GET">
                            <img class="product-image" src="gambar/proris.png" alt="Product 29">
                            <div class="product-info">
                                <div class="product-title">Proris</div>
                                <div class="product-price">Rp. 10.000 /Strip</div>
                                <center><a href="dProris.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="termofen sirup" method="GET">
                            <img class="product-image" src="gambar/termofen sirup.jpg" alt="Product 30">
                            <div class="product-info">
                                <div class="product-title">Termofen Sirup</div>
                                <div class="product-price">Rp. 30.000 /Botol</div>
                                <center><a href="dTermofen Sirup.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="entrostop" method="GET">
                            <img class="product-image" src="gambar/entrostop.jpg" alt="Product 31">
                            <div class="product-info">
                                <div class="product-title">Entrostop</div>
                                <div class="product-price">Rp. 8.500 /Strip</div>
                                <center><a href="dEntrostop.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="diapet" method="GET">
                            <img class="product-image" src="gambar/diapet.jpeg" alt="Product 32">
                            <div class="product-info">
                                <div class="product-title">Diapet</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dDiapet.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="diatabs" method="GET">
                            <img class="product-image" src="gambar/diatabs.jpg" alt="Product 33">
                            <div class="product-info">
                                <div class="product-title">Diatabs</div>
                                <div class="product-price">Rp. 3.000 /Strip</div>
                                <center><a href="dDiatabs.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="dentasol" method="GET">
                            <img class="product-image" src="gambar/dentasol.jpg" alt="Product 34">
                            <div class="product-info">
                                <div class="product-title">Dentasol</div>
                                <div class="product-price">Rp. 17.500 /Botol</div>
                                <center><a href="dDentasol.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="ponstan" method="GET">
                            <img class="product-image" src="gambar/ponstan.jpeg" alt="Product 35">
                            <div class="product-info">
                                <div class="product-title">Ponstan</div>
                                <div class="product-price">Rp. 40.000 /Strip</div>
                                <center><a href="dPonstan.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="cataflam" method="GET">
                            <img class="product-image" src="gambar/cataflam.jpeg" alt="Product 36">
                            <div class="product-info">
                                <div class="product-title">Cataflam</div>
                                <div class="product-price">Rp. 70.000 /Strip</div>
                                <center><a href="dCataflam.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <form action="produk.php" name="asam mefenamat" method="GET">
                            <img class="product-image" src="gambar/asam mefenamat.jpg" alt="Product 37">
                            <div class="product-info">
                                <div class="product-title">Asam Mefenamat</div>
                                <div class="product-price">Rp. 4.000 /Strip</div>
                                <center><a href="dAsam Mefenamat.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                            </form>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1038.jpg" alt="Product 38">
                            <div class="product-info">
                                <div class="product-title">Furosemide</div>
                                <div class="product-price">Rp. 2.000 /Strip</div>
                                <center><a href="dFurosemide.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1039.jpg" alt="Product 39">
                            <div class="product-info">
                                <div class="product-title">Captopril</div>
                                <div class="product-price">Rp. 500 /Strip</div>
                                <center><a href="dCaptopril.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1040.jpg" alt="Product 40">
                            <div class="product-info">
                                <div class="product-title">Valsartan</div>
                                <div class="product-price">Rp. 6.000 /Strip</div>
                                <center><a href="dValsartan.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1042.jpg" alt="Product 42">
                            <div class="product-info">
                                <div class="product-title">Amlodipine</div>
                                <div class="product-price">Rp. 8.000 /Strip</div>
                                <center><a href="dAmlodipine.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1043.jpg" alt="Product 43">
                            <div class="product-info">
                                <div class="product-title">Bisoprolol</div>
                                <div class="product-price">Rp. 1.000 /Strip</div>
                                <center><a href="dBisoprolol.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1044.jpg" alt="Product 44">
                            <div class="product-info">
                                <div class="product-title">Sangobion Vita-Tonik</div>
                                <div class="product-price">Rp. 40.000 /Botol</div>
                                <center><a href="dSangobion Vita-Tonik.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1045.jpg" alt="Product 45">
                            <div class="product-info">
                                <div class="product-title">Tonikum Bayer</div>
                                <div class="product-price">Rp. 16.500 /Botol</div>
                                <center><a href="dTonikum Bayer.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1046.jpg" alt="Product 46">
                            <div class="product-info">
                                <div class="product-title">Iberet Folic</div>
                                <div class="product-price">Rp. 45.000 /Strip</div>
                                <center><a href="dIberet Folic.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>

                        <div class="product-card">
                            <img class="product-image" src="gambar/1047.jpg" alt="Product 47">
                            <div class="product-info">
                                <div class="product-title">Hemobion Strip</div>
                                <div class="product-price">Rp. 30.000 /Strip</div>
                                <center><a href="dHemobion Strip.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1048.jpg" alt="Product 48">
                            <div class="product-info">
                                <div class="product-title">Maltofer Chewable Strip</div>
                                <div class="product-price">Rp. 21.000 /Strip</div>
                                <center><a href="dMaltofer Chewable Strip.php" class="btn btn-primary">Buy Now</a>
                                </center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1049.jpg" alt="Product 49">
                            <div class="product-info">
                                <div class="product-title">Ipi Vitamin A</div>
                                <div class="product-price">Rp. 6.000 /Botol</div>
                                <center><a href="dIpi Vitamin A.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1050.jpg" alt="Product 50">
                            <div class="product-info">
                                <div class="product-title">Blackmores Vitamin A</div>
                                <div class="product-price">Rp. 350.000 /Botol</div>
                                <center><a href="dBlackmores Vitamin A.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1051.jpg" alt="Product 51">
                            <div class="product-info">
                                <div class="product-title">Swisse Ultiboost Zinc+</div>
                                <div class="product-price">Rp. 50.000 /Botol</div>
                                <center><a href="dSwisse Ultiboost Zinc+.php" class="btn btn-primary">Buy Now</a>
                                </center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/glodisa netravision.jpg" alt="Product 52">
                            <div class="product-info">
                                <div class="product-title">Glodisa Netravision</div>
                                <div class="product-price">Rp. 10.000 /Botol</div>
                                <center><a href="dGlodisa Netravision.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>

                        <div class="product-card">
                            <img class="product-image" src="gambar/1053.jpg" alt="Product 53">
                            <div class="product-info">
                                <div class="product-title">Wellness Mega B Complex</div>
                                <div class="product-price">Rp. 230.000 /Botol</div>
                                <center><a href="dWellness Mega B Complex.php" class="btn btn-primary">Buy Now</a>
                                </center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1054.jpg" alt="Product 54">
                            <div class="product-info">
                                <div class="product-title">Ipi Vitamin B</div>
                                <div class="product-price">Rp. 6.000 /Botol</div>
                                <center><a href="dIpi Vitamin B.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>

                        <div class="product-card">
                            <img class="product-image" src="gambar/1055.jpg" alt="Product 55">
                            <div class="product-info">
                                <div class="product-title">Blackmores Multi B Perfomance</div>
                                <div class="product-price">Rp. 175.000 /Botol</div>
                                <center><a href="dBlackmores Multi B Perfomance.php" class="btn btn-primary">Buy Now</a>
                                </center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1056.jpg" alt="Product 56">
                            <div class="product-info">
                                <div class="product-title">Vitalong C</div>
                                <div class="product-price">Rp. 35.000 /Botol</div>
                                <center><a href="dVitalong C.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1057.jpg" alt="Product 57">
                            <div class="product-info">
                                <div class="product-title">Ipi Vitamin C</div>
                                <div class="product-price">Rp. 6.000 /Botol</div>
                                <center><a href="dIpi Vitamin C.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1058.jpg" alt="Product 58">
                            <div class="product-info">
                                <div class="product-title">Holisticare Super Ester C</div>
                                <div class="product-price">Rp. 69.000 /Strip</div>
                                <center><a href="dHolisticare Super Ester C.php" class="btn btn-primary">Buy Now</a>
                                </center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1059.jpg" alt="Product 59">
                            <div class="product-info">
                                <div class="product-title">Blackmores Bio C</div>
                                <div class="product-price">Rp. 144.000 /Botol</div>
                                <center><a href="dBlackmores Bio C.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1060.jpg" alt="Product 60">
                            <div class="product-info">
                                <div class="product-title">Enervon C</div>
                                <div class="product-price">Rp. 41.000 /Botol</div>
                                <center><a href="dEnervon C.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1061.jpg" alt="Product 61">
                            <div class="product-info">
                                <div class="product-title">Insto Regular</div>
                                <div class="product-price">Rp. 17.500 /Botol</div>
                                <center><a href="dInsto Regular.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1062.jpg" alt="Product 62">
                            <div class="product-info">
                                <div class="product-title">Rohto Eye Flush</div>
                                <div class="product-price">Rp. 33.500 /Botol</div>
                                <center><a href="dRohto Eye Flush.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1063.jpg" alt="Product 63">
                            <div class="product-info">
                                <div class="product-title">Cendo Cenfresh</div>
                                <div class="product-price">Rp. 46.500 /Botol</div>
                                <center><a href="dCendo Cenfresh.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1064.jpg" alt="Product 64">
                            <div class="product-info">
                                <div class="product-title">Y-rins</div>
                                <div class="product-price">Rp. 22.500 /Botol</div>
                                <center><a href="dY-rins.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1065.jpg" alt="Product 65">
                            <div class="product-info">
                                <div class="product-title">Teofilin</div>
                                <div class="product-price">Rp. 2.500 /Strip</div>
                                <center><a href="dTeofilin.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1066.jpg" alt="Product 66">
                            <div class="product-info">
                                <div class="product-title">Ipatropium</div>
                                <div class="product-price">Rp. 185.000 /Pcs</div>
                                <center><a href="dIpatropium.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1067.jpg" alt="Product 67">
                            <div class="product-info">
                                <div class="product-title">Steroid</div>
                                <div class="product-price">Rp. 31.000 /Botol</div>
                                <center><a href="dSteroid.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1068.jpg" alt="Product 68">
                            <div class="product-info">
                                <div class="product-title">Licasma</div>
                                <div class="product-price">Rp. 110.000 /Botol</div>
                                <center><a href="dLicasma.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1069.jpg" alt="Product 69">
                            <div class="product-info">
                                <div class="product-title">Canesten Krim</div>
                                <div class="product-price">Rp. 19.000 /Pcs</div>
                                <center><a href="dCanesten Krim.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1070.jpg" alt="Product 70">
                            <div class="product-info">
                                <div class="product-title">Fungiderm</div>
                                <div class="product-price">Rp. 13.500 /Pcs</div>
                                <center><a href="dFungiderm.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1071.jpg" alt="Product 71">
                            <div class="product-info">
                                <div class="product-title">Salep Miconazole</div>
                                <div class="product-price">Rp. 8.500 /Pcs</div>
                                <center><a href="dSalep Miconazole.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1072.jpg" alt="Product 72">
                            <div class="product-info">
                                <div class="product-title">Daktarin</div>
                                <div class="product-price">Rp. 34.000 /Pcs</div>
                                <center><a href="dDaktarin.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1073.jpg" alt="Product 73">
                            <div class="product-info">
                                <div class="product-title">Kalpanax Salep</div>
                                <div class="product-price">Rp. 8.000 /Pcs</div>
                                <center><a href="dKalpanax Salep.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <img class="product-image" src="gambar/1074.jpg" alt="Product 74">
                            <div class="product-info">
                                <div class="product-title">Salep 88</div>
                                <div class="product-price">Rp. 16.000 /Pcs</div>
                                <center><a href="dSalep 88.php" class="btn btn-primary">Buy Now</a></center>
                            </div>
                        </div>
                        
                    </div>
                    <br><br>

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