<div class="container">

  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        <span class="panel-title">Data Pupuk</span>
      </div>
      <div class="panel-body">
       <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="datatable2" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pupuk</th>
              <th>Spesifikasi Pupuk</th>
              <th>Sifat Pupuk</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $nomor=0;
                // print_r($data);
            foreach ($data as $key ) {
              $nomor++;
              ?>
              <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $key->nama_pupuk;?></td>
                <td><?php echo $key->spesifikasi_pupuk;?></td>
                <td><?php echo $key->sifat_pupuk;?></td>
                <td><img width="60px" height="60px" src="data:image/jpeg;base64,<?php echo base64_encode( $key->gambar);?>"></td>
                <td>

                  <div class="btn-group animation-switcher">
                    <button class="btn btn-success" type="button" data-effect="mfp-zoomIn" onclick="ubah_data(<?php echo $key->id_pupuk;?>);">
                      <i class="fa fa-pencil"></i>
                    </button>
                    <button class="btn btn-danger " type="button" data-effect="mfp-zoomIn" onclick="hapus_data(<?php echo $key->id_pupuk;?>);">
                      <i class="fa fa-trash"></i>
                    </button>
                  </div>

                </td>

              </tr>
              <?php
            }

            ?>

          </tbody>
        </table>
      </div>
    </div>
    <div class="panel-footer">

    </div>
  </div>
</div>

<div class="col-md-4 admin-grid">
  <div class="panel panel-editbox-open">
    <div class="panel-heading">

      <span class="panel-title">Input Data Pupuk</span>
    </div>
    <div class="panel-body">
      <form class="admin-form" action="<?= base_url('pupuk/tambahData') ?>" method="post">

        <div class="section">
          <label for="nama_pupuk" class="field prepend-icon">
            <input type="text" name="nama_pupuk" id="nama_pupuk" class="gui-input" placeholder="Nama Pupuk">
            <label for="nama_pupuk" class="field-icon"><i class="fa fa-user"></i>
            </label>
          </label>
        </div>

        <div class="section">
          <label class="field prepend-icon">
            <textarea class="gui-textarea" id="spesifikasi_pupuk" name="spesifikasi_pupuk" placeholder="Spesifikasi Pupuk"></textarea>
            <label for="spesifikasi_pupuk" class="field-icon"><i class="fa fa-comments"></i>
            </label>
          </label>
        </div>

        <div class="section">
          <label class="field prepend-icon">
            <textarea class="gui-textarea" id="sifat_pupuk" name="sifat_pupuk" placeholder="Sifat Pupuk"></textarea>
            <label for="sifat_pupuk" class="field-icon"><i class="fa fa-comments"></i>
            </label>
          </label>
        </div>

        <div class="section">
          <label for="gambar" class="field prepend-icon">
            <input type="text" name="gambar" id="gambar" class="gui-input" placeholder="Gambar">
            <label for="gambar" class="field-icon"><i class="fa fa-user"></i>
            </label>
          </label>
        </div>


        <div class="col-xs-6 col-xs-offset-3">
          <button type="button" class="btn btn-rounded btn-primary btn-block">Simpan</button>
        </div>

      </form>
    </div>
  </div>
</div>

</div>
