<?php 
include "koneksi.php";
$kd = $_GET['id_transaksi'];
$query_mysql = mysql_query("SELECT * FROM transaksi WHERE id_transaksi='$kd'")or die(mysql_error());
$nomor = 1;
while($data = mysql_fetch_array($query_mysql)){
?>
<div class="col-md-8">
<form class="form-horizontal" action="updatetransaksi.php" method="POST">
    <legend>Update Data Transaksi</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Transaksi</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="id_transaksi" value="<?php echo $data['id_transaksi']?>">
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">ID Pasien</label>
      <div class="col-md-5">
        <select class="form-control" id="select" name="id_pasien" value="<?php echo $data['id_pasien']?>" >
          <option value=''>Pilih ID Pasien</option>
          <?php
          include "koneksi.php";
	        $sql = mysql_query("SELECT * FROM pasien ORDER BY id_pasien ASC");
	            if(mysql_num_rows($sql) != 0){
		            while($row = mysql_fetch_assoc($sql)){
			    echo '<option>'.$row['id_pasien'].'</option>';
		            }   
	            }
	    ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">ID Obat</label>
      <div class="col-md-5">
        <select class="form-control" id="select" name="id_obat" value="<?php echo $data['id_obat']?>" >
          <option value=''>Pilih ID Obat</option>
          <?php
          include "koneksi.php";
	        $sql = mysql_query("SELECT * FROM obat ORDER BY id_obat ASC");
	            if(mysql_num_rows($sql) != 0){
		            while($row = mysql_fetch_assoc($sql)){
			    echo '<option>'.$row['id_obat'].'</option>';
		            }   
	            }
	    ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Jumlah Transaksi</label>
      <div class="col-md-10">
        <input type="text" class="form-control" name="jumlah_transaksi" value="<?php echo $data['jumlah_transaksi']?>">
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