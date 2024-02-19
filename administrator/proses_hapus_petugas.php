<?php

//koneksi database 
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$petugas_id = $_POST['petugas_id'];

//menginput data ke database
mysqli_query($koneksi, "delete from petugas where petugas_id='$petugas_id'");

//mengaihkan halaman kembali ke data_arang.php
header("location:data_pengguna.php?pesan=hapus");
?>