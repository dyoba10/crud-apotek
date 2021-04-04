<?php
include"koneksi.php";
// Disesuaikan dengan name yang ada pada form input
$id_transaksi=	    $_POST["id_transaksi"];
$id_pasien=	        $_POST["id_pasien"];
$id_obat=	        $_POST["id_obat"];
$jumlah_transaksi=  $_POST["jumlah_transaksi"];
// Disesuaikan dengan nama table dan filed yang ada pada database
$sql="INSERT  INTO transaksi VALUES ('$id_transaksi','$id_pasien','$id_obat','$jumlah_transaksi')";
$kueri=mysql_query($sql) or die (mysql_error());

    if( $kueri ) {
        // kalau berhasil
        header('Location: index.php?page=transaksi');
    } else {
        // kalau gagal 
        header('Location: index.php?page=error');
    }
?>