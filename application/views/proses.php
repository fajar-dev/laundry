<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Data cucian</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama pelanggan</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Selesai</th>
                  <th>Berat</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                <td><?php echo $no++?></td>
                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->masuk, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->keluar, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->berat, ENT_QUOTES, 'UTF-8');?> kg</td>
                  <td>Rp. <?php echo number_format($data->berat * 3000);?></td>
                  <td>
                    <a href="#" class="btn btn-primary">Print</a>
                    <a href="<?php echo base_url(); ?>page/ambil/<?php echo $data->id;?>" class="btn btn-success">Selesai</a>
                    <a href="<?php echo base_url(); ?>page/cancel/<?php echo $data->id;?>" class="btn btn-danger">Cancel</a>
                  </td>
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