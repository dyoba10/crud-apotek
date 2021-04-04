<?php
include"koneksi.php";
// Disesuaikan dengan name yang ada pada form input
$id_pasien=	        $_POST["id_pasien"];
$nama_pasien=		$_POST["nama_pasien"];
$tgl_lahir=	        $_POST["tgl_lahir"];
// Disesuaikan dengan nama table dan filed yang ada pada database
$sql="INSERT  INTO pasien VALUES ('$id_pasien','$nama_pasien','$tgl_lahir')";
$kueri=mysql_query($sql) or die (mysql_error());

    if( $kueri ) {
        // kalau berhasil
        header('Location: index.php?page=pasien');
    } else {
        // kalau gagal 
        header('Location: index.php?page=error');
    }
?>