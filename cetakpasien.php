<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
</head>
<body>

	<center>

		<h2>DATA LAPORAN PASIEN</h2>
		<h4>APOTEK MEGA</h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
	<thead>
    <tr>
      <th>ID Pasien</th>
      <th>Nama Pasien</th>
      <th>Tgl Lahir</th>
    </tr>
  </thead>
  <tbody>
    <?php
	include "koneksi.php";
	//script hapus data
	extract($_GET);
	if($perintah=='hapus') 
		{
		$sql_del="DELETE FROM pasien where id_pasien='$id_pasien'";
		$kueri2=mysql_query($sql_del) or die ("Gagal Query");
		}
	//end script hapus data
	$tampil="SELECT * FROM pasien ORDER BY id_pasien DESC";
	$qtampil=mysql_query($tampil) or die(mysql_error());
	$datanya=mysql_num_rows($qtampil);
	while (list($id_pasien,$nama_pasien,$tgl_lahir)=
	mysql_fetch_array($qtampil))
	{
	$no++;
	?>
		<tr>
		  <td><?php echo $id_pasien?></td>
		  <td><?php echo $nama_pasien ?></td>
		  <td><?php echo $tgl_lahir ?></td>  
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