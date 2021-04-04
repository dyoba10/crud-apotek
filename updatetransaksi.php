<?php include "koneksi.php";
$id_transaksi=		$_POST["id_transaksi"];
$id_pasien=	        $_POST["id_pasien"];
$id_obat=	        $_POST["id_obat"];
$jumlah_transaksi=	$_POST["jumlah_transaksi"];

$sql="UPDATE transaksi SET id_pasien='$id_pasien',
     id_obat='$id_obat', jumlah_transaksi='$jumlah_transaksi' WHERE id_transaksi='$id_transaksi'";
$kueri=mysql_query($sql) or die (mysql_error());

    if( $kueri ) {
        // kalau berhasil
        header('Location: index.php?page=transaksi');
    } else {
        // kalau gagal 
        header('Location: index.php?page=error');
    }
?>