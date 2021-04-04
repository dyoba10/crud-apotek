<?php include "koneksi.php";
$id_pasien=	        $_POST["id_pasien"];
$nama_pasien=		$_POST["nama_pasien"];
$tgl_lahir=	        $_POST["tgl_lahir"];

$sql="UPDATE pasien SET nama_pasien='$nama_pasien',
     tgl_lahir='$tgl_lahir' WHERE id_pasien='$id_pasien'";
$kueri=mysql_query($sql) or die (mysql_error());

    if( $kueri ) {
        // kalau berhasil
        header('Location: index.php?page=pasien');
    } else {
        // kalau gagal 
        header('Location: index.php?page=error');
    }
?>