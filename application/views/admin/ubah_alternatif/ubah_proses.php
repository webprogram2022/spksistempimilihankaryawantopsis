<!-- Begin Page Content -->
<div class="page-content-wrapper ">
    <!-- START PAGE CONTENT -->
    <div class="content sm-gutter">
        <div class="container-fluid padding-25 sm-padding-10">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"></h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-xl-12 col-lg-8">
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <div class="text-left">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row m-1">
                                <form action="<?= base_url('admin/ubahAltProses'); ?>" method="post">
                                    <table class="table table-bordered table-striped">
                                        <thead class="bg-info">
                                            <tr>
                                                <th scope="col" class="text-white">Kode Karyawan</th>
                                                <th scope="col" class="text-white">Nama Karyawan</th>
                                                <th scope="col" class="text-white">Jenis Kelamin</th>
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
                                                <tr>
                                                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                                                    <td>
                                                        <input type="text" class="form-control" name="kode_alternatif" value="<?= $data['kode_alternatif']; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="nama_alternatif" value="<?= $data['nama_alternatif']; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="jns_kelamin" value="<?= $data['jns_kelamin']; ?>">
                                                    <td>
                                                        <input type="text" class="form-control" name="c1" value="<?= $data['c1']; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="c2" value="<?= $data['c2']; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="c3" value="<?= $data['c3']; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="c4" value="<?= $data['c4']; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="c8" value="<?= $data['c8']; ?>">
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-success">Ubah</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->