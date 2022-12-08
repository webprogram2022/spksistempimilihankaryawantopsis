    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
            <!-- START CONTAINER FLUID -->
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="card shadow mb-4">

                        <div class="col-xl-5 col-lg-8">
                            <div class="card shadow mb-4 mt-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-info ">
                                    <h6 class="text-white">Ubah data Admin</h6>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('admin/ubahPassword'); ?>" method="post">
                                        <?= $this->session->flashdata('message'); ?>
                                            <div class="row m-1">
                                                <div class="form-group">
                                                    <input placeholder="Nama User" class="form-control form-control-user" type="text" name="username" class="form-control" id="p1" required>
                                                </div>
                                            </div>
                                        <div class="row m-1">
                                            <div class="form-group">
                                                <input placeholder="Password Sekarang ..." class="form-control form-control-user" type="password" name="password" class="form-control" id="p1" required>
                                            </div>
                                        </div>
                                        <div class="row m-1">
                                            <div class="form-group">
                                                <input placeholder="Password Baru ..." type="password" name="password2" class="form-control" id="p2" required>
                                            </div>
                                        </div>
                                        <div class="row  m-1">
                                            <div class="form-group">
                                                <input placeholder="Ulangi Password Baru ..." type="password" name="password3" class="form-control" id="p3" required>
                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                        <button class="btn btn-success" type="submit">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END OVERLAY -->