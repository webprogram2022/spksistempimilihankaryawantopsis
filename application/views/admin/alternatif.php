<?php


?>
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
          <a href="#" data-toggle="modal" data-target="#exampleModal1" class="btn btn-success m-b-10">
            Tambah Data</a>
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Sortasi</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($sortasi as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifSortasi'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_sortasi'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- bidang Proses -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Proses</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C8</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($proses as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c8']; ?></td>

                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifProses'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_proses'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Bidang Kantor -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Kantor</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C5</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($kantor as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c5']; ?></td>

                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifKantor'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_kantor'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- supir -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Supir</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C11</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($supir as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c12']; ?></td>

                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifSupir'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_supir'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- loader -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Loader</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C11</th>
                    <th scope="col" class="text-white">C12</th>
                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($loader as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c11']; ?></td>
                      <td><?= $data['c12']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifLoader'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_loader'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- excavator -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Excavator</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C12</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($excavator as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c12']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifExcavator'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_excavator'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- pengawas pu -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Pengawas PU</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C6</th>
                    <th scope="col" class="text-white">C7</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($pengawas_pu as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c6']; ?></td>
                      <td><?= $data['c7']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifPengawasPu'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_pengawas_pu'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- labor -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Labor</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C8</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($labor as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c8']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifLabor'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_labor'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- limbah -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Limbah</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C13</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($limbah as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c13']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifLimbah'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_limbah'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- security -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Security</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C5</th>
                    <th scope="col" class="text-white">C9</th>
                    <th scope="col" class="text-white">C10</th>

                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($security as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>

                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c5']; ?></td>
                      <td><?= $data['c9']; ?></td>
                      <td><?= $data['c10']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifSecurity'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_security'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody> 
              </table>
            </div>
          </div>
          <!-- maintenance -->
          <div class="card shadow mb-2">
            <div class="card-header py-1 d-flex flex-row align-items-center justify-content-between">
              <div class="text-center">
                <h3>Maintenance</h3>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead class="bg-info">
                  <tr>
                    <th scope="col" class="text-white">No</th>
                    <th scope="col" class="text-white">Kode Karyawan</th>
                    <th scope="col" class="text-white">Nama Karyawan</th>
                    <th scope="col" class="text-white">Jenis Kelamin</th>
                    <th scope="col" class="text-white">C1</th>
                    <th scope="col" class="text-white">C2</th>
                    <th scope="col" class="text-white">C3</th>
                    <th scope="col" class="text-white">C4</th>
                    <th scope="col" class="text-white">C12</th>
                    <th scope="col" class="text-white">C14</th>


                    <th scope="col" class="text-white">Aksi</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($maintenance as $data) : ?>
                    <tr class="font-weight-bolder text-black">
                      <td><?= $i; ?></td>
                      <td><?= $data['kode_alternatif']; ?></td>
                      <td><?= $data['nama_alternatif']; ?></td>
                      <td><?= $data['jns_kelamin']; ?></td>
                      <td><?= $data['c1']; ?></td>
                      <td><?= $data['c2']; ?></td>
                      <td><?= $data['c3']; ?></td>
                      <td><?= $data['c4']; ?></td>
                      <td><?= $data['c12']; ?></td>
                      <td><?= $data['c14']; ?></td>


                      <td>
                        <a class="btn btn-danger m-1" href="<?= base_url('admin/ubahAlternatifMaintenance'); ?>?id=<?= $data['id']; ?>">Ubah</a>
                        <a class="btn btn-success btn-sm m-1" href="<?= base_url('Admin/hapus_maintenance'); ?>?id=<?= $data['id']; ?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- END OVERLAY -->