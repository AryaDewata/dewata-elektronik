<?php
require 'function.php'; // Function Module
$data_barang = query("SELECT * FROM barang ORDER BY Nama_barang ASC;"); // Data Barang
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Dewata Elektronik</title>

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

        <!-- Tabel Data Barang -->
        <table class="table-barang">
            <tr>
                <th colspan="11">Daftar Barang</th>
            </tr>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Username</th>
                <th>Tanggal Masuk</th>
                <th colspan="2"></th>
            </tr>
            <!-- Foreach data barang -->
            <?php $i = 1; foreach($data_barang as $data) : ?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?= $data['Id_barang']?></td>
                    <td><?= $data['Nama_barang']?></td>
                    <td><?= $data['Satuan']?></td>
                    <td>Rp <?= number_format($data['Harga_beli'], 0, '', '.')?></td>
                    <td>Rp <?= number_format($data['Harga_jual'], 0, '', '.')?></td>
                    <td><?= $data['Jumlah_stok']?></td>
                    <td><?= $data['User_name']?></td>
                    <td><?= join('/', array_reverse(explode('-', $data['Tgl_input'])))?></td>
                    <td><a href="edit.php?id=<?= $data['Id_barang']?>" class="btn btn-edit" title="klik untuk melakukan perubahan pada data barang"><i class="fas fa-edit"></i> Ubah</a></td>
                    <td><a href="delete.php?id=<?= $data['Id_barang']?>" class="btn btn-delete" title="klik untuk menghapus data barang dari daftar barang" onclick="return confirm('Hapus <?=$data['Nama_barang']?> dari daftar barang?')"><i class="fas fa-trash"></i> Hapus</a></td>
                </tr>
            <?php endforeach; ?>
            <!-- Endforeach data barang -->
            <tr>
                <td colspan="9"></td>
                <td colspan="2"><a href="add.php" class="btn btn-add" title="klik untuk menambah data barang"><i class="fas fa-add"></i> Tambah Barang</a></td>
            </tr>
        </table>

    </div>
    
</body>
</html>