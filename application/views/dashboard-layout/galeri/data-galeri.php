                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?=$title?></h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Semua <?=$title?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Tempat</th>
                                                    <th>Foto Galeri</th>
                                                    <th>Target Lokasi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; foreach ($galeri as $data) : ?>
                                                <tr>
                                                    <th><?=$no++;?></th>
                                                    <td><?=ucfirst($data->nama_galeri)?></td>
                                                    <td>
                                                        <img src="<?=base_url('uploads/galeri/'.$data->foto_galeri)?>" alt="" class="img-fluid" width="50%" height="50%">
                                                    </td>
                                                    <td><?=ucfirst($data->target)?></td>
                                                    <td>
                                                        <a href="data-galeri/edit/<?=$data->id?>" class="btn btn-primary">Edit</a>
                                                        <a href="data-galeri/hapus/<?=$data->id?>" class="btn btn-danger" id="btn-hapus">Hapus</a>
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
            