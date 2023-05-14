<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="proses_pesanan.php">
  <div class="form-group row mb-2">
    <label for="id" class="col-4 col-form-label">Id</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="id" name="id" type="date" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="nama" name="nama" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="ukuran" class="col-4 col-form-label">Ukuran</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="ukuran" name="ukuran" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="warna" class="col-4 col-form-label">Warna</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="warna" name="warna" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="stok" class="col-4 col-form-label">stok</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="stok" name="stok" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="harga" class="col-4 col-form-label">harga</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="harga" name="harga" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="tipe_pakaian_id" class="col-4 col-form-label">tipe_pakaian_id</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="tipe_pakaian_id" name="tipe_pakaian_id" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                          echo 'Update';
                                                                        } else {
                                                                          echo 'Simpan';
                                                                        } ?>" />
    </div>
  </div>
</form>