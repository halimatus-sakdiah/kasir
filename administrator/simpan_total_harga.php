<?php

//koneksi database 
include '../koneksi.php';

//menangkap data yang dikirim dari form 
$TotalHarga = $_POST['TotalHarga'];
$penjualan_id = $_POST['penjualan_id'];
$pelanggan_id = $_POST['pelanggan_id'];

//menginput data ke database
mysqli_query($koneksi, "update penjualan set TotalHarga='$TotalHarga' where penjualan_id='$penjualan_id'");

//mengaihkan halaman kembali ke detai_pembelian.php
header("location:detail_pembelian.php?pelanggan_id=$pelanggan_id");
?>