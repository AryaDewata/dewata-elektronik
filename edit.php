<?php
require 'function.php'; // Function Module

// Query data barang
$id = $_GET["id"]; // ID Barang
$data = query("SELECT * FROM barang WHERE Id_barang = '$id' LIMIT 1;")[0]; // Data Barang

// Ubah Data Barang
if(isset($_POST['edit-data'])){
    if(ubahData($_POST) == 1){
        echo "<script>
                alert('Perubahan data barang berhasil disimpan!');
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
    <title>Dewata Elektronik - Ubah Data Barang</title>

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
                <input type="hidden" name="Id_barang_lama" value="<?= $data['Id_barang'];?>">
                <tr>
                    <td><label for="Id_barang">Kode Barang</label></td>
                    <td><input type="text" id="Id_barang" name="Id_barang" maxlength="11" autocomplete="off" required value="<?= $data['Id_barang']?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="Nama_barang">Nama Barang</label></td>
                    <td><input type="text" id="Nama_barang" name="Nama_barang" maxlength="50" autocomplete="off" required value="<?= $data['Nama_barang']?>"></td>
                </tr>
                <tr>
                    <td><label for="Satuan">Satuan</label></td>
                    <td><input type="text" id="Satuan" name="Satuan" maxlength="25" autocomplete="off" required value="<?= $data['Satuan']?>"></td>
                </tr>
                <tr>
                    <td><label for="Harga_beli">Harga Beli</label></td>
                    <td><input type="text" id="Harga_beli" name="Harga_beli" maxlength="10" autocomplete="off" required value="<?= $data['Harga_beli']?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="Harga_jual">Harga Jual</label></td>
                    <td><input type="text" id="Harga_jual" name="Harga_jual" maxlength="10" autocomplete="off" required value="<?= $data['Harga_jual']?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="Jumlah_stok">Stok</label></td>
                    <td><input type="text" id="Jumlah_stok" name="Jumlah_stok" maxlength="11" autocomplete="off" required value="<?= $data['Jumlah_stok']?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                </tr>
                <tr>
                    <td><label for="User_name">Username</label></td>
                    <td><input type="text" id="User_name" name="User_name" maxlength="25" autocomplete="off" required value="<?= $data['User_name']?>"></td>
                </tr>
                <tr>
                    <td><label for="Tgl_input">Tanggal Masuk</label></td>
                    <td><input type="date" id="Tgl_input" name="Tgl_input" autocomplete="off" required value="<?= $data['Tgl_input']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="edit-data" class="btn btn-edit" onclick="return confirm('Simpan perubahan pada data barang?')"><i class="fas fa-edit"></i> Simpan Perubahan</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>