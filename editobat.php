<?php 
include "koneksi.php";
$kd = $_GET['id_obat'];
$query_mysql = mysql_query("SELECT * FROM obat WHERE id_obat='$kd'")or die(mysql_error());
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
<div class="col-md-8">
<form class="form-horizontal" action="updateobat.php" method="POST">
    <legend>Update Data Obat</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Obat</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="id_obat" value="<?php echo $data['id_obat']?>">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Nama Obat</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="nama_obat" value="<?php echo $data['nama_obat']?>">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Pembuat Obat</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="pembuat_obat" value="<?php echo $data['pembuat_obat']?>">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Stock Obat</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="stok_obat" value="<?php echo $data['stok_obat']?>">
      </div>
    </div>
    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Tgl Kadaluwarsa</label>
      <div class="col-md-4">
        <input type="date" class="form-control" name="tgl_kadaluwarsa" value="<?php echo $data['tgl_kadaluwarsa']?>">
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