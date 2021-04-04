<div class="col-sm-12">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Data Pasien</h3>
  </div>
  <div class="panel-body">
	<div class="alert alert-dismissible alert-info">
  		<button type="button" class="close" data-dismiss="alert">×</button>
  		<h4>Warning!</h4>
  		<p>Jika Ingin Menghapus data Pasien, Pastikan dihapus terlebih dahulu transaksi yang terdapat id_pasien yang ingin di hapus<a href="#" class="alert-link"></a>.</p>
	</div>
	<a href="cetakpasien.php" class="btn btn-primary" target="_blank">Cetak</a>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID Pasien</th>
      <th>Nama Pasien</th>
      <th>Tgl Lahir</th>
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
		  <td> 
		  <a href="index.php?page=pasien&perintah=hapus&id_pasien=<?php echo $id_pasien ?>" 
		  class="btn btn-danger" onClick="return confirm
		  ('Anda Yakin Menghapus data ini ?');">Hapus</a> 
		  
		  <a href="index.php?page=editpasien&perintah=hapus&id_pasien=<?php echo $id_pasien ?>"
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