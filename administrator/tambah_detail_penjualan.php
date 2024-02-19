<?php
//koneksi database 
include '../koneksi.php';

//menangkap data yang dIKIRIM DARI FORM
$pelanggan_id = $_POST['pelanggan_id'];
$penjualan_id = $_POST['penjualan_id'];

//MENGINPUT DATA KE DATABAse 
mysqli_query($koneksi, "INSERT INTO detailpenjualan (penjualan_id, produk_id) VALUES ('$penjualan_id', NULL)");

//mengalihkan halaman kembali ke detail_pembelian.php
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");


?>