<?php

//koneksi database 
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$produk_id = $_POST['produk_id'];

//menginput data ke database
mysqli_query($koneksi, "delete from produk where produk_id='$produk_id'");

//mengaihkan halaman kembali ke data_arang.php
header("location:data_barang.php?pesan=hapus");
?>