                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Galeri</label>
                                            <input type="text" class="form-control" name="nama_galeri" value="<?=set_value('nama_galeri')?>">
                                            <small class="text-danger"><?= form_error('nama_galeri') ?></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Target Lokasi</label>
                                            <select class="form-control" name="target">
                                                <option value="">-- Pilih Target Lokasi</option>
                                                <option value="Header">Header</option>
                                                <option value="Destinasi Pilihan">Destinasi Pilihan</option>
                                                <option value="Inspirasi Perjalanan">Inspirasi Perjalanan</option>
                                            </select>
                                            <small class="text-danger"><?= form_error('target') ?></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Upload Foto <small class="text-danger">(Format : JPG/PNG, Max. 5mb)</small></label>
                                            <input class="form-control" type="file" name="userfile[]" required>
                                            <small class="text-danger"><?=form_error('userfile') ?></small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>