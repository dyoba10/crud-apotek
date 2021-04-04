<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN OBAT</h2>
		<h4>APOTEK MEGA</h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
	<thead>
    <tr>
      <th>ID Obat</th>
      <th>Nama Obat</th>
      <th>Pembuat Obat</th>
      <th>Stok Obat</th>
	  <th>Tgl Kadaluwarsa</th>
    </tr>
  </thead>
  <tbody>
    <?php
	include "koneksi.php";
	//script hapus data
	extract($_GET);
	if($perintah=='hapus') 
		{
		$sql_del="DELETE FROM obat where id_obat='$id_obat'";
		$kueri2=mysql_query($sql_del) or die ("Gagal Query");
		}
	//end script hapus data
	$tampil="SELECT * FROM obat ORDER BY id_obat DESC";
	$qtampil=mysql_query($tampil) or die(mysql_error());
	$datanya=mysql_num_rows($qtampil);
	while (list($id_obat,$nama_obat,$pembuat_obat,$stok_obat,$tgl_kadaluwarsa)=
	mysql_fetch_array($qtampil))
	{
	$no++;
	?>
		<tr>
		  <td><?php echo $id_obat?></td>
		  <td><?php echo $nama_obat ?></td>
		  <td><?php echo $pembuat_obat ?></td>
		  <td><?php echo $stok_obat ?></td>
			<td><?php echo $tgl_kadaluwarsa ?></td>			  
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