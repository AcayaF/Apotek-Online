<?php
    session_start();
    include 'koneksi.php';
    $username=$_POST('username');
    $password=$_POST('password');

    $query= mysqli_query($mysqli,"SELECT * from tb_user where username = '$username' and password = '$password' ");
    $result= mysqli_num_rows($query);

    if($result > 0){
        header("location:../home.php");
    }else{
        header("location:../index.php?pesan=eror");
    }
?>