<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $titlePage; ?></h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                </div>
                <div class="card-body">
                    <div class="row m-1">
                        <form action="<?= base_url('admin/ubahKriteriaLabor'); ?>" method="post">
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
                                        <tr>
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