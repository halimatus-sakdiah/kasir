<?php

//koneksi database 
include '../koneksi.php';

//menangkap data yang dikirim dari form 
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$level = $_POST['level'];

//menginput data ke database
mysqli_query($koneksi, "insert into petugas values('', '$Nama', '$Username', '$Password', '$level')");

//mengaihkan halaman kembali ke detai_pembelian.php
header("location:data_pengguna.php?pesan=simpan");

?>