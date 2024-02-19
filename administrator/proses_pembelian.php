<?php

//koneksi database 
include '../koneksi.php';

//menerapkan data yang dikirim dari form 
$pelanggan_id = $_POST['pelanggan_id'];
$Nama = $_POST['Nama'];
$JenisKelamin = $_POST['JenisKelamin'];
$Alamat = $_POST['Alamat'];
$Kota = $_POST['Kota'];
$KodePost = $_POST['KodePost'];
$NoTelp = $_POST['NoTelp'];
$Tanggal = $_POST['Tanggal'];

//menginput data ke database
mysqli_query($koneksi, "insert into pelanggan values('$pelanggan_id', '$Nama', '$JenisKelamin', '$Alamat', '$Kota', '$KodePost', '$NoTelp')");

mysqli_query($koneksi, "insert into penjualan values('', '$Tanggal', '', '$pelanggan_id')");

//mengalihkan halaman kembali ke data_arang.php
header("location:pembelian.php?pesan=simpan");
?>