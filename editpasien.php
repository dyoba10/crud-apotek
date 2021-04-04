<?php 
include "koneksi.php";
$kd = $_GET['id_pasien'];
$query_mysql = mysql_query("SELECT * FROM pasien WHERE id_pasien='$kd'")or die(mysql_error());
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
<div class="col-md-8">
<form class="form-horizontal" action="updatepasien.php" method="POST">
    <legend>Update Data Obat</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Pasien</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="id_pasien" value="<?php echo $data['id_pasien']?>">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Nama Pasien</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="nama_pasien" value="<?php echo $data['nama_pasien']?>">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Tgl Lahir</label>
      <div class="col-md-4">
        <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
</div>
<?php } ?>