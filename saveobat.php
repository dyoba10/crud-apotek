<?php
include"koneksi.php";
// Disesuaikan dengan name yang ada pada form input
$id_obat=	        $_POST["id_obat"];
$nama_obat=		    $_POST["nama_obat"];
$pembuat_obat=	    $_POST["pembuat_obat"];
$stok_obat=	        $_POST["stok_obat"];
$tgl_kadaluwarsa=	$_POST["tgl_kadaluwarsa"];
// Disesuaikan dengan nama table dan filed yang ada pada database
$sql="INSERT  INTO obat VALUES ('$id_obat','$nama_obat',
     '$pembuat_obat','$stok_obat','$tgl_kadaluwarsa')";
$kueri=mysql_query($sql) or die (mysql_error());

    if( $kueri ) {
        // kalau berhasil
        header('Location: index.php?page=obat');
    } else {
        // kalau gagal 
        header('Location: index.php?page=error');
    }
?>