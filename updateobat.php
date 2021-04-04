<?php include "koneksi.php";
$id_obat=	        $_POST["id_obat"];
$nama_obat=		    $_POST["nama_obat"];
$pembuat_obat =     $_POST["pembuat_obat"];
$stok_obat=	    $_POST["stok_obat"];
$tgl_kadaluwarsa=	$_POST["tgl_kadaluwarsa"];

$sql="UPDATE obat SET nama_obat='$nama_obat',
     pembuat_obat='$pembuat_obat',stok_obat='$stok_obat',tgl_kadaluwarsa='$tgl_kadaluwarsa' WHERE id_obat='$id_obat'";
$kueri=mysql_query($sql) or die (mysql_error());

    if( $kueri ) {
        // kalau berhasil
        header('Location: index.php?page=obat');
    } else {
        // kalau gagal 
        header('Location: index.php?page=error');
    }
?>