

<br><br><br>
<!--END MEMBUAT NAVBAR -->
<div class="container-fluid">


<!--Membuat kolom Beranda -->
<div class="col-sm-12 ">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Tambah Data Obat</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" method="POST" action="saveobat.php">
  <fieldset>
    <legend>Add Data Obat</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">ID Obat</label>
      <div class="col-lg-2">
        <input type="text" class="form-control"  placeholder="id obat" name="id_obat" required>
      </div>
    </div>
	 <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Nama Obat</label>
      <div class="col-lg-4">
        <input type="text" class="form-control"  placeholder="Nama Obat" name="nama_obat" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Pembuat Obat</label>
      <div class="col-lg-2">
        <input type="text" class="form-control"  placeholder="Pembuat Obat" name="pembuat_obat" required>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Stok Obat</label>
      <div class="col-lg-2">
        <input type="text" class="form-control"  placeholder="Stok Obat" name="stok_obat" required>
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Tgl Kadaluwarsa</label>
      <div class="col-lg-2">
        <input type="date" class="input-tanggal" name="tgl_kadaluwarsa" required>
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

  

