    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
            <!-- START CONTAINER FLUID -->
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <table class="table table-borderless">
                        <tr>
                            <th>
                                <h3 class="text-xl text-left font-weight-bold text-info text-uppercase mb-1"><?= $page_title; ?></h5>
                                    <hr>
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-8">
                        <!-- <a href="#" data-toggle="modal" data-target="#exampleModal3" class="btn btn-success m-b-10">
                            Tambah Kriteria</a> -->
                        <!-- sortasi -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Sortasi</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($sortasi as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_sortasi'); ?>">Ubah</a>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- proses -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Proses</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Klaim</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($proses as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c8']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_proses'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- kantor -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Kantor</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Administrasi</th>

                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kantor as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c5']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_kantor'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- supir -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Supir</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Maintenance</th>

                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($supir as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c12']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_supir'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- loader -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Loader</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Keterampilan</th>
                                            <th scope="col" class="text-white">Maintenance</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($loader as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c11']; ?></td>
                                                <td><?= $data['c12']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_loader'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- excavator -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Excavator</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Maintenace</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($excavator as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c12']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_excavator'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- pengawas PU -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Pengawas PU</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Prestasi</th>
                                            <th scope="col" class="text-white">Pekerjaan Umum</th>

                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pengawas_pu as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c6']; ?></td>
                                                <td><?= $data['c7']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_pengawas_pu'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- labor -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Labor</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Klaim</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($labor as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c8']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_labor'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- limbah -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Limbah</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Limbah</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($limbah as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c13']; ?></td>

                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_limbah'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- security -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Security</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>

                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Administrasi</th>
                                            <th scope="col" class="text-white">Keamanan</th>
                                            <th scope="col" class="text-white">Disiplin</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($security as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c5']; ?></td>
                                                <td><?= $data['c9']; ?></td>
                                                <td><?= $data['c10']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_security'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- maintenance -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h2>Maintenance</h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col" class="text-white">Rendemen</th>
                                            <th scope="col" class="text-white">Tonase</th>
                                            <th scope="col" class="text-white">Absensi</th>
                                            <th scope="col" class="text-white">Kebersihan</th>
                                            <th scope="col" class="text-white">Maintenance</th>
                                            <th scope="col" class="text-white">Breakdown</th>
                                            <th scope="col" class="text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($maintenance as $data) : ?>
                                            <tr class="font-weight-bolder text-black">
                                                <td><?= $data['c1']; ?></td>
                                                <td><?= $data['c2']; ?></td>
                                                <td><?= $data['c3']; ?></td>
                                                <td><?= $data['c4']; ?></td>
                                                <td><?= $data['c12']; ?></td>
                                                <td><?= $data['c14']; ?></td>
                                                <td>
                                                    <a class="btn btn-danger m-1" href="<?= base_url('admin/ubah_maintenance'); ?>">Ubah</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END OVERLAY -->
    <div class="modal fade" id="exampleModal3" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="exampleModalLabel">KRITERIA</h4>
                </div>
                <div class="modal-body">
                    <hr>
                    <form action="<?= base_url('admin/tambah_kriteria'); ?>" method="post">
                        <div class="form-group">
                            <label class="text" for="">KODE KRITERIA</label>
                            <input type="text" class="form-control" name="kode_kriteria" required>
                        </div>
                        <div class="form-group">
                            <label class="text" for="">NAMA KRITERIA</label>
                            <input type="text" class="form-control" name="nama_kriteria" required>
                        </div>
                        <div class="form-group">
                            <label class="text" for="">BOBOT KRITERIA</label>
                            <input type="text" class="form-control" name="bobot_kriteria" required>
                        </div>
                        <div class="form-group">
                            <label class="text" for="">ATRIBUT KRITERIA</label>
                            <input type="text" class="form-control" name="atribut_kriteria" required>
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-success" onclick="return confirm('Tambah Data?');">Tambah Data kriteria</button>
                    </form>
                </div>
            </div>
        </div>
    </div>