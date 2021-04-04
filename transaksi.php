<div class="col-sm-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Transaksi</h3>
  </div>
  <div class="panel-body">
	<a href="cetaktransaksi.php" class="btn btn-primary" target="_blank">Cetak</a>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID Transaksi</th>
      <th>ID Pasien</th>
      <th>ID Obat</th>
      <th>Jumlah Transaksi</th>
	  <th >Action</th>
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
		  <td> 
		  <a href="index.php?page=transaksi&perintah=hapus&id_transaksi=<?php echo $id_transaksi ?>" 
		  class="btn btn-danger" onClick="return confirm
		  ('Anda Yakin Menghapus data ini ?');">Hapus</a> 
		  
		  <a href="index.php?page=edittransaksi&perintah=hapus&id_transaksi=<?php echo $id_transaksi ?>"
		  class="btn btn-success">Edit</a>		  
		  </td>		  
		</tr>		
	
<?php
	}
	?>	
	</tbody>
	</table>
  </div>
</div>
</div>