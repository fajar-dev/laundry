<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Input data Barang</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url()?>page/tambah_proses" method="post">
          <div class="form-group">
                      <label>Nama pelanggan</label>
                      <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>tanggal masuk</label>
                      <input type="date" name="masuk" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>tanggal Selesai</label>
                      <input type="date" name="selesai" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Berat</label>
                      <input type="number" name="berat" class="form-control">
                    </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block my-3" tabindex="4">Simpan</button>
        </div>
          </form>
      </div>
    </div>
  </div>
</div>