<div class="col-sm-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Obat</h3>
  </div>
  <div class="panel-body">
	<div class="alert alert-dismissible alert-info">
  		<button type="button" class="close" data-dismiss="alert">×</button>
  		<h4>Warning!</h4>
  		<p>Jika Ingin Menghapus data Obat, Pastikan dihapus terlebih dahulu transaksi yang terdapat id obat yang ingin di hapus<a href="#" class="alert-link"></a>.</p>
	</div>
	<a href="cetakobat.php" class="btn btn-primary" target="_blank">Cetak</a>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID Obat</th>
      <th>Nama Obat</th>
      <th>Pembuat Obat</th>
      <th>Stok Obat</th>
	  <th>Tgl Kadaluwarsa</th>
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
		  <td> 
		  <a href="index.php?page=obat&perintah=hapus&id_obat=<?php echo $id_obat ?>" 
		  class="btn btn-danger" onClick="return confirm
		  ('Anda Yakin Menghapus data ini ?');">Hapus</a> 
		  
		  <a href="index.php?page=editobat&perintah=hapus&id_obat=<?php echo $id_obat ?>"
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