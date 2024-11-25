<?php
session_start();

// membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","pabrikciki");


// menambah barang baru
if(isset($_POST['addnewbarang'])){
    $transaksi_id=$_POST['transaksi_id'];
    $gudang_id=$_POST['gudang_id'];
    $customer_id =$_POST['customer_id'];
    $nama_produk =$_POST['nama_produk'];
    $jenis_barang =$_POST['jenis_barang'];
    $jumlah =$_POST['jumlah'];
    $tanggal_transaksi =$_POST['tanggal_transaksi'];

    $addtotable = mysqli_query($conn,"insert into transaksi (transaksi_id, gudang_id, customer_id, nama_produk, Jenis_barang, jumlah, tanggal_transaksi) values('$transaksi_id','$gudang_id','$customer_id','$nama_produk','$jenis_barang','$jumlah','$tanggal_transaksi')");
    if($addtotable){
    header('location:index.php');
    }else{
        echo 'Gagal';
        header('location:index.php');
    }
}
?>