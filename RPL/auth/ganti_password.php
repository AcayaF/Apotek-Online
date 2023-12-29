<?php
include "koneksi.php";

//enkripsi email
$email = $_POST['email'];

//panggil username
$username = $_POST['username']; 

$tampil = mysqli_query($mysqli, "SELECT *FROM tb_user WHERE username = '$username' and email = '$email' ");
$data = mysqli_fetch_array($tampil);
//jika data ditemukan maka password sesuai
if($data){
    //jika password baru dan konfirmasi password sama 
    $password_baru = $_POST['password_baru'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    if($password_baru == $konfirmasi_password){
        //proses ganti password 
        //enkripsi password baru 
        $pass_ok = $konfirmasi_password;
        $ubah = mysqli_query($mysqli, "UPDATE tb_user set password = '$pass_ok' WHERE id_user = '$data[id_user]'");

        if($ubah){
            // echo "<script> alert ('Password anda berhasil dirubah, silahkan kembali untuk melakukan login ulang dengan password baru');document.location'../login.php'</script>";
            $message = "Password anda berhasil dirubah, silahkan kembali untuk melakukan login ulang dengan password baru";
            echo '<script>alert("' . $message . '");</script>';
            $home='../login.php';
            echo '<script language="javascript"> window.location.href = "' . $home . '";</script>';
        }
    }else{
        // echo "<script> alert ('Password baru dan konfirmasi password tidak sesuai');document.location'../forgot password.php'</script>";
        $message = "Password baru dan konfirmasi password tidak sesuai";
        echo '<script>alert("' . $message . '");</script>';
        $home='../forgot password.php';
        echo '<script language="javascript"> window.location.href = "' . $home . '";</script>';
    }
}else{
    // // $message = "Maaf Email anda tidak sesuai/tidak terdaftar";
    // // echo '<script>alert("' . $message . '");</script>';
    // echo "<script> alert ('Maaf Email anda tidak sesuai/tidak terdaftar, coba lagi');document.location'../forgot password.php'</script>";
    $message = "Maaf Email anda tidak sesuai/tidak terdaftar, coba lagi'";
    echo '<script>alert("' . $message . '");</script>';
    $home='../forgot password.php';
    echo '<script language="javascript"> window.location.href = "' . $home . '";</script>';
}
?>