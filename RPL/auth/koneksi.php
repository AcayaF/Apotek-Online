<?php
    $host='localhost';
    $username='root';
    $password='';
    $namaDB='db_medifarm';

    $mysqli = mysqli_connect ($host,$username,$password,$namaDB);

    // Check connection
    if (!$mysqli) {
        die("Koneksi gagal" . mysqli_connect_error());
    }
?>