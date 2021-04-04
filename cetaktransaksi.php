<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN Transaksi</h2>
		<h4>APOTEK MEGA</h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
	<thead>
    <tr>
      <th>ID Transaksi</th>
      <th>ID Pasien</th>
      <th>ID Obat</th>
      <th>Jumlah Transaksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
	include "koneksi.php";
	//script hapus data
	extract($_GET);
	if($perintah=='hapus') 
		{
		$sql_del="DELETE FROM transaksi where id_transaksi='$id_transaksi'";
		$kueri2=mysql_query($sql_del) or die ("Gagal Query");
		}
	//end script hapus data
	$tampil="SELECT * FROM transaksi ORDER BY id_transaksi DESC";
	$qtampil=mysql_query($tampil) or die(mysql_error());
	$datanya=mysql_num_rows($qtampil);
	while (list($id_transaksi,$id_pasien,$id_obat,$jumlah_transaksi)=
	mysql_fetch_array($qtampil))
	{
	$no++;
	?>
		<tr>
		  <td><?php echo $id_transaksi?></td>
		  <td><?php echo $id_pasien ?></td>
		  <td><?php echo $id_obat ?></td>
          <td><?php echo $jumlah_transaksi ?></td>		  
		</tr>		
	
<?php
	}
	?>		
	</table>

	<script>
		window.print();
	</script>

</body>
</html>