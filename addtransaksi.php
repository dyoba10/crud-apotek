

<br><br><br>
<!--END MEMBUAT NAVBAR -->
<div class="container-fluid">


<!--Membuat kolom Beranda -->
<div class="col-sm-12 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tambah Data Transaksi</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" method="POST" action="savetransaksi.php">
  <fieldset>
    <legend>Add Data Transaksi</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Transaksi</label>
      <div class="col-lg-2">
        <input type="text" class="form-control"  placeholder="id transaksi" name="id_transaksi" required>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">ID Pasien</label>
      <div class="col-lg-5">
        <select class="form-control" id="select" name="id_pasien">
          <option value=''>Pilih ID Pasien</option>
          <?php
          include "koneksi.php";
	        $sql = mysql_query("SELECT * FROM pasien");
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
      <div class="col-lg-5">
        <select class="form-control" id="select" name="id_obat">
          <option value=''>Pilih ID Obat</option>
          <?php
          include "koneksi.php";
	        $sql = mysql_query("SELECT * FROM obat");
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
      <div class="col-lg-2">
        <input type="text" class="form-control" placeholder="Jumlah Transaksi" name="jumlah_transaksi" required>
      </div>
    </div>
	 
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        $('.input-tanggal').datepicker();
    });
</script>    
  </div>
</div>
</div>

  

