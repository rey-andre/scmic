                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?=$title?></h6>
                                    <div class="text-right">
                                        <a href="<?=site_url('data-laporan')?>" class="btn btn-sm btn-primary">Kembali</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="<?=site_url('data-laporan/import/data')?>" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label>File Excel <small class="text-danger">(Format : csv/xlsx, Max. 3mb)</small></label>
                                            <input class="form-control" type="file" name="upload_file" required>
                                            <small class="text-danger"><?=form_error('upload_file') ?></small>
                                        </div>
                                        <a href="<?=site_url('data-laporan/import/format')?>" class="btn btn-sm btn-danger" target="_blank">Download Format Import</a>
                                        <button type="submit" class="btn btn-primary btn-sm">Import</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>