<?php
//koneksi database 
include '../koneksi.php';

//menangkap data yang dIKIRIM DARI FORM
$detail_id = $_POST['detail_id'];
$pelanggan_id = $_POST['pelanggan_id'];

//MENGINPUT DATA DARI DATABAse 
mysqli_query($koneksi, "delete from detailpenjualan where detail_id='$detail_id'");

//mengalihkan halaman kembali ke data_barang.php
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");


?>