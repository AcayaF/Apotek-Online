<?php
include_once('koneksi.php');

function simpan_data(){
    global $mysqli;

    $choice = $_POST['choice'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!is_numeric($choice)) {
        $email = $choice;
    } else {
        $number_phone = $choice;
    }
    
    $query = "INSERT INTO tb_user(email, username, password, number_phone) VALUES ('$email', '$username', '$password', '$number_phone')";
    mysqli_query($mysqli, $query);
    header("location: ../login.php");	
}


function hapus_data_keranjang(){
    $id=$_GET['id_keranjang'];
    global $mysqli;
    $query="DELETE FROM tb_keranjang WHERE id_keranjang='$id'";
    mysqli_query($mysqli, $query);
    header("location: ../keranjang.php");
}

function tmbh_jumlah_item_keranjang(){
    $id=$_GET['id_keranjang'];
    global $mysqli;
    $query="SELECT * FROM tb_keranjang WHERE id_keranjang='$id'";
    $result=$mysqli->query($query);
    $data=$result->fetch_assoc();
    // echo $data['jml_item'];
    // $jumlah = $_POST['jumlah'];
    
    $jumlah = $data['jml_item']+1;
    
    $query="UPDATE tb_keranjang SET jml_item = '$jumlah' WHERE id_keranjang='$id'" ;
    mysqli_query($mysqli, $query);
    header("location: ../keranjang.php");
}

function krg_jumlah_item_keranjang(){
    $id=$_GET['id_keranjang'];
    global $mysqli;
    $query="SELECT * FROM tb_keranjang WHERE id_keranjang='$id'";
    $result=$mysqli->query($query);
    $data=$result->fetch_assoc();
    $jumlah = $data['jml_item']-1;
    
    $query="UPDATE tb_keranjang SET jml_item = '$jumlah' WHERE id_keranjang='$id'" ;
    mysqli_query($mysqli, $query);
    header("location: ../keranjang.php");
}

function masukkan_ke_keranjang(){
    $jml=$_POST['jumlah'];
    $kode_obat=$_POST['kode_obat'];
    $id_user=$_POST['id_user'];

    global $mysqli;
    $query="INSERT INTO tb_keranjang (id_user, kode_obat, jml_item, status) values('$id_user', '$kode_obat', '$jml', 'belum dibeli')";
    $result=$mysqli->query($query);

    header("location: ../keranjang.php");
}

function Beli_Langsung(){
    $jumlah=$_POST['jumlah'];
    $kode_obat=$_POST['kode_obat'];

    $data = array(
        'jumlah' => $jumlah,
        'kode_obat' => $kode_obat,
        // ...
    );

    $queryParams = http_build_query(array('data' => base64_encode(serialize($data))));

    header("Location: ../checkout.php?" . $queryParams);
    exit();
}

function transaksi(){
    
    $message = "Pesanan anda sudah diterima, silahkan menuju histori untuk melihat riwayat pesanan anda !";
    echo '<script>alert("' . $message . '");</script>';

    global $mysqli;

    $query1="SELECT id_pembayaran FROM tb_transaksi";
    $result1=$mysqli->query($query1);
    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $idBayar=$row['id_pembayaran'];  
        }
    }
    $idBayar=$idBayar+1;
        

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $harga = $_POST['harga-per-satuan'];
    $ongkir = $_POST['hidden-shipping-price'];
    $totalBayar = $_POST['harga-per-satuan']+$_POST['hidden-shipping-price'];
    $id_user = $_POST['id_user'];
    $kodeObat = $_POST['kodeObat'];
    $jmlItem = $_POST['jmlItem'];
    $hargaObat = $_POST['hargaObat'];
    $pm = $_POST['payment'];
    $idCart = $_POST['idCart'];

    $jumlah_KO = count($kodeObat);

    for ($i = 0; $i < $jumlah_KO; $i++) {

        global $mysqli;

        $query2="DELETE FROM tb_keranjang WHERE id_keranjang = $idCart[$i]";
        mysqli_query($mysqli, $query2);

        $query="INSERT INTO tb_transaksi(id_transaksi, id_user, name, phone_number, address, kode_obat, jml_obat, tanggal_transaksi, id_pembayaran, biaya_ongkir, diskon, total_pembayaran, metode_pembayaran, status) values(NULL, '$id_user', '$name', '$phone', '$address', '$kodeObat[$i]', '$jmlItem[$i]', NOW(), '$idBayar', '$ongkir', '0', '$totalBayar', '$pm', 'selesai')";
        mysqli_query($mysqli, $query);
    }
    
    header("Location: ../invoice.php?");
    exit();
}
?>



<?php
if(isset($_POST['proses']) and $_POST['proses']=='sign up'){
    simpan_data();
}else if(isset($_POST['proses']) and $_POST['proses']=='Update'){
    update_data();
}
else if(isset($_GET['proses']) and $_GET['proses']=='hk'){
    hapus_data_keranjang();
}
else if(isset($_GET['proses']) and $_GET['proses']=='tambah'){
    tmbh_jumlah_item_keranjang();
}
else if(isset($_GET['proses']) and $_GET['proses']=='kurang'){
    krg_jumlah_item_keranjang();
}
else if(isset($_POST['proses']) and $_POST['proses']=='pesan obat'){
    masukkan_ke_keranjang();
}

else if(isset($_POST['proses']) and $_POST['proses']=='bl'){
    Beli_Langsung();
}

else if(isset($_POST['proses']) and $_POST['proses']=='transaksi'){
    transaksi();
}

else{
    echo 'tidak berhasil';
}
?>