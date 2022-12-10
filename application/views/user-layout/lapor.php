    <section class="container mt-5">
      <h1 class="heading pb-3 mt-5">Laporan Masyarakat</h1>

      <div class="container shadow">
        <h1 class="pt-3 ms-3">Isi Data Berikut untuk Melapor!</h1>
        <div class="row pb-3">
          <div class="col-lg-12 mb-3">
            <div class="card kartu shadow m-md-3">
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" style="font-size: 15px;">
                  <div class="mb-3">
                    <label class="form-label">Isi Laporan</label>
                    <textarea class="form-control" name="deskripsi" value="<?=set_value('deskripsi')?>" style="font-size: 15px;" rows="5" cols="40"></textarea>
                    <small class="text-danger"><?= form_error('deskripsi') ?></small>
                  </div>
                  <!-- <div class="mb-3">
                    <label class="form-label">Tanggal Laporan</label>
                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" style="height: 30px; font-size: 15px;" name="tgl" value="<?=set_value('tgl')?>"/>
                      <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker" style="height: 30px; font-size: 15px;">
                        <div class="input-group-text"><i class="fa fa-calendar" aria-hidden="true" style="height: 20px; font-size: 15px;"></i></div>
                      </div>
                    </div>
                    <small class="text-danger"><?= form_error('tgl') ?></small>
                  </div> -->
                  <div class="mb-3">
                    <label class="form-label">Bukti Foto <small class="text-danger">(Format : JPG/PNG, Max. 5mb)</small></label>
                    <input class="form-control" type="file" name="userfile[]" required style="height: 30px; font-size: 12px;">
                    <small class="text-danger"><?=form_error('userfile') ?></small>
                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>