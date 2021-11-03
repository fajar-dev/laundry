<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Data Cucian </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Tanggal Diambil</th>
                  <th>Nama pelanggan</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Selesai</th>
                  <th>Berat</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                <td>1</td>
                  <td><span class="badge badge-primary"><?php echo htmlentities($data->diambil, ENT_QUOTES, 'UTF-8');?></span></td>
                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->masuk, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->keluar, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->berat, ENT_QUOTES, 'UTF-8');?> kg</td>
                  <td>Rp. <?php echo number_format($data->berat * 3000);?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>