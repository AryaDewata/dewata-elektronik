<?php
require 'function.php'; // Function Module

// Tambah Data Barang
if(isset($_POST['add-data'])){
    if(tambahData($_POST) == 1){
        echo "<script>
                alert('Barang berhasil ditambahkan ke daftar barang!');
                window.location.href = 'index.php';
              </script>";
    }else echo "<script>alert('Terjadi kesahalan!')";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Dewata Elektronik - Tambah Barang</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- Container -->
    <div class="container">
        <form action="#" method="post">
            <table class="table-edit">
                <tr>
                    <td><label for="Id_barang">Kode Barang</label></td>
                    <td><input type="text" id="Id_barang" name="Id_barang" maxlength="11" autocomplete="off" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="Nama_barang">Nama Barang</label></td>
                    <td><input type="text" id="Nama_barang" name="Nama_barang" maxlength="50" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="Satuan">Satuan</label></td>
                    <td><input type="text" id="Satuan" name="Satuan" maxlength="25" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="Harga_beli">Harga Beli</label></td>
                    <td><input type="text" id="Harga_beli" name="Harga_beli" maxlength="10" autocomplete="off" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="Harga_jual">Harga Jual</label></td>
                    <td><input type="text" id="Harga_jual" name="Harga_jual" maxlength="10" autocomplete="off" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="Jumlah_stok">Stok</label></td>
                    <td><input type="text" id="Jumlah_stok" name="Jumlah_stok" maxlength="11" autocomplete="off" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="User_name">Username</label></td>
                    <td><input type="text" id="User_name" name="User_name" maxlength="25" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td><label for="Tgl_input">Tanggal Masuk</label></td>
                    <td><input type="date" id="Tgl_input" name="Tgl_input" autocomplete="off" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="add-data" class="btn btn-add" onclick="return confirm('Tambah data barang ke daftar barang?')"><i class="fas fa-add"></i> Tambah Data Barang</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>