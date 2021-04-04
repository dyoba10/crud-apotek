

<br><br><br>
<!--END MEMBUAT NAVBAR -->
<div class="container-fluid">


<!--Membuat kolom Beranda -->
<div class="col-sm-12 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tambah Data Pasien</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" method="POST" action="savepasien.php">
  <fieldset>
    <legend>Add Data Pasien</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Pasien</label>
      <div class="col-lg-2">
        <input type="text" class="form-control"  placeholder="id pasien" name="id_pasien" required>
      </div>
    </div>
	 <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama Pasien</label>
      <div class="col-lg-4">
        <input type="text" class="form-control"  placeholder="Nama Pasien" name="nama_pasien" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tgl Lahir</label>
      <div class="col-lg-2">
        <input type="date" class="input-tanggal" name="tgl_lahir" required>
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

  

