<?php
require 'function.php'; // Function Module

$id = $_GET['id']; // ID Barang
if(hapusData($id) == 1){
    echo "<script>
            alert('Barang berhasil dihapus dari daftar barang!');
            window.location.href = 'index.php';
          </script>";
}else echo "<script>alert('Terjadi kesahalan!')";
?>