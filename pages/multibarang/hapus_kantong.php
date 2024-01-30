<?php
session_start();
$id = $_GET['id'];
//unset($_SESSION["kantong belanja"]);
if (isset($_GET['id'])) {
     echo $id . "<br>";
     $cart = unserialize(serialize($_SESSION['kantong belanja']));
     unset($cart[$_GET['id']]);
     $cart = array_values($cart);
     $_SESSION['kantong belanja'] = $cart;
}
if (!empty($_SESSION['kantong belanja'])) {
     $cart = unserialize(serialize($_SESSION['kantong belanja']));
     for ($i = 0; $i < count($cart); $i++) {
          echo $cart[$i]['harga'] . "/" . $cart[$i]['nama_barang'] . "<br>";
     }
}
header('Location: ../../index.php?page=data_multibarang');
