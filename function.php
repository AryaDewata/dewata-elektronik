<?php
$conn = mysqli_connect('localhost', 'root', '', 'dbtoko'); // Database Connection

// Query Function
function query($query){
    global $conn; // Global Connection

    $result = mysqli_query($conn, $query);
    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}

// Function tambah data barang
function tambahData($data){
    global $conn; // Connection

    // Data barang
    $Id_barang = htmlspecialchars($data['Id_barang']);
    $Nama_barang = htmlspecialchars($data['Nama_barang']);
    $Satuan = htmlspecialchars($data['Satuan']);
    $Harga_beli = htmlspecialchars($data['Harga_beli']);
    $Harga_jual = htmlspecialchars($data['Harga_jual']);
    $Jumlah_stok = htmlspecialchars($data['Jumlah_stok']);
    $User_name = htmlspecialchars($data['User_name']);
    $Tgl_input = htmlspecialchars($data['Tgl_input']);
    
    // Query
    mysqli_query($conn, "INSERT INTO barang VALUES('$Id_barang', '$Nama_barang', '$Satuan', '$Harga_beli', '$Harga_jual', '$Jumlah_stok', '$User_name', '$Tgl_input');");
    return mysqli_affected_rows($conn);
}

// Function ubah data musik
function ubahData($data){
    global $conn; // Global Connection

    // Data barang
    $Id_barang_lama = htmlspecialchars($data['Id_barang_lama']);
    $Id_barang = htmlspecialchars($data['Id_barang']);
    $Nama_barang = htmlspecialchars($data['Nama_barang']);
    $Satuan = htmlspecialchars($data['Satuan']);
    $Harga_beli = htmlspecialchars($data['Harga_beli']);
    $Harga_jual = htmlspecialchars($data['Harga_jual']);
    $Jumlah_stok = htmlspecialchars($data['Jumlah_stok']);
    $User_name = htmlspecialchars($data['User_name']);
    $Tgl_input = htmlspecialchars($data['Tgl_input']);

    // Query
    mysqli_query($conn, "UPDATE barang SET Id_barang = '$Id_barang', Nama_barang = '$Nama_barang', Satuan = '$Satuan', Harga_beli = '$Harga_beli', Harga_jual = '$Harga_jual', Jumlah_stok = '$Jumlah_stok', User_name = '$User_name', Tgl_input = '$Tgl_input' WHERE Id_barang = '$Id_barang_lama';");
    return mysqli_affected_rows($conn);
}

// Function hapus data barang
function hapusData($id){
    global $conn; // Global Connection

    // Query
    mysqli_query($conn, "DELETE FROM barang WHERE Id_barang = '$id';");
    return mysqli_affected_rows($conn);
}
?>