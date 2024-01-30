<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
      // Beranda
    case 'penjualan':
      include 'pages/barang/data_penjualan_barang.php';
      break;

  //DATA MAHASISWA
    case 'data_mahasiswa':
      include 'pages/mahasiswa/data_mahasiswa.php';
      break;

    case 'tambah_mahasiswa':
      include 'pages/mahasiswa/tambah_mahasiswa.php';
      break;

    case 'ubah_mahasiswa';
      include 'pages/mahasiswa/ubah_mahasiswa.php';
      break;
  //SINGLE ITEM
    case 'data_barang';
      include 'pages/barang/data_barang.php';
      break;

    case 'tambah_barang';
      include 'pages/barang/tambah_barang.php';
      break;

    case 'ubah_barang';
      include 'pages/barang/ubah_barang.php';
      break;

    case 'transaksi_barang';
      include 'pages/barang/transaksi_barang.php';
      break;

      // MULTI ITEM
    case 'data_multibarang':
      include 'pages/multibarang/data_transaksi_barang.php';
      break;

    case 'bayar':
      include 'pages/multibarang/bayar.php';
      break;

    case 'data_penjualan_multi':
      include 'pages/multibarang/data_multi.php';
      break;
  }
} else {
  include "pages/beranda.php";
}
