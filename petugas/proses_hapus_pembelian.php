<?php

//koneksi database 
include '../koneksi.php';

//menangkap data id yang dikirim dari url
$pelanggan_id = $_POST['pelanggan_id'];

//menghapus data DARI database
mysqli_query($koneksi,"delete from pelanggan where pelanggan_id='$pelanggan_id'");
mysqli_query($koneksi,"delete from penjualan where pelanggan_id='$pelanggan_id'");

//mengaihkan halaman kembali ke data_arang.php
header("location:pembelian.php?pesan=hapus");
?>