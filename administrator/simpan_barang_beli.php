<?php

//koneksi database 
include '../koneksi.php';

//menangkap data yang dikirim dari form 
$produk_id = $_POST['produk_id'];
$detail_id = $_POST['detail_id'];
$pelanggan_id = $_POST['pelanggan_id'];

//menginput data ke database
mysqli_query($koneksi, "update detailpenjualan set produk_id='$produk_id' where detail_id='$detail_id'");

//mengaihkan halaman kembali ke data_arang.php
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");
?>