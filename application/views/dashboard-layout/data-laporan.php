                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Semua <?=$title?></h6>
                                    <div class="text-right">
                                        <a href="<?=site_url('data-laporan/import')?>" class="btn btn-sm btn-primary">Import Excel</a>
                                        <a href="<?=site_url('data-laporan/export')?>" class="btn btn-sm btn-success">Export Excel</a>
                                        <a href="<?=site_url('data-laporan/export-pdf')?>" class="btn btn-sm btn-warning">Export PDF</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Pelapor</th>
                                                    <th>Foto Laporan</th>
                                                    <th>Tanggal Laporan</th>
                                                    <th>Deskripsi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($laporan as $data) : ?>
                                                <tr>
                                                    <th><?=$no++;?></th>
                                                    <td><?=ucfirst($data->nama)?></td>
                                                    <td><img src="<?=base_url('uploads/laporan/'.$data->foto)?>" alt="" class="img-fluid" width="50%" height="50%"></td>
                                                    <td><?= date('D, d-m-Y H:i', strtotime($data->tgl)) ?> WIB</td>
                                                    <td><?=ucfirst($data->deskripsi)?></td>
                                                    <td>
                                                        <a href="data-laporan/hapus/<?=$data->id?>" class="btn btn-danger" id="hapus-laporan">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>