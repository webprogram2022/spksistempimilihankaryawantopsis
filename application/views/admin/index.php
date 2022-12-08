<?php
// Bidang Sortasi
$nilaib1 = [];
foreach ($p_sortasi as $key => $data) {
    $nilaib1[$key] = $data['preferensi'];
}
array_multisort($nilaib1, SORT_DESC, $p_sortasi);

// Bidang Proses
$nilaib2 = [];
foreach ($p_proses as $key => $data) {
    $nilaib2[$key] = $data['preferensi'];
}
array_multisort($nilaib2, SORT_DESC, $p_proses);

// BIDANG KANTOR
$nilaib3 = [];
foreach ($p_kantor as $key => $data) {
    $nilaib3[$key] = $data['preferensi'];
}
array_multisort($nilaib3, SORT_DESC, $p_kantor);

// BIDANG SUPIR
$nilaib4 = [];
foreach ($p_supir as $key => $data) {
    $nilaib4[$key] = $data['preferensi'];
}
array_multisort($nilaib4, SORT_DESC, $p_supir);

// BIDANG LOADER
$nilaib5 = [];
foreach ($p_loader as $key => $data) {
    $nilaib5[$key] = $data['preferensi'];
}
array_multisort($nilaib5, SORT_DESC, $p_loader);

// BIDANG EXCAVATOR
$nilaib6 = [];
foreach ($p_excavator as $key => $data) {
    $nilaib6[$key] = $data['preferensi'];
}
array_multisort($nilaib6, SORT_DESC, $p_excavator);

// BIDANG PENGAWAS PU
$nilaib7 = [];
foreach ($p_pengawas_pu as $key => $data) {
    $nilaib7[$key] = $data['preferensi'];
}
array_multisort($nilaib7, SORT_DESC, $p_pengawas_pu);

// BIDANG LABOR
$nilaib8 = [];
foreach ($p_labor as $key => $data) {
    $nilaib8[$key] = $data['preferensi'];
}
array_multisort($nilaib8, SORT_DESC, $p_labor);

// BIDANG LIMBAH
$nilaib9 = [];
foreach ($p_limbah as $key => $data) {
    $nilaib9[$key] = $data['preferensi'];
}
array_multisort($nilaib9, SORT_DESC, $p_limbah);

// BIDANG SECURITY
$nilaib10 = [];
foreach ($p_security as $key => $data) {
    $nilaib10[$key] = $data['preferensi'];
}
array_multisort($nilaib10, SORT_DESC, $p_security);

// Bidang Maintenance
$nilaib11 = [];
foreach ($p_maintenance as $key => $data) {
    $nilaib11[$key] = $data['preferensi'];
}
array_multisort($nilaib11, SORT_DESC, $p_maintenance);

// Input Laporan
$laporan = [];
for ($i = 0; $i < 1; $i++) {
    $laporan[] = $p_sortasi[$i];
    $laporan[] = $p_proses[$i];
    $laporan[] = $p_kantor[$i];
    $laporan[] = $p_supir[$i];
    $laporan[] = $p_loader[$i];
    $laporan[] = $p_excavator[$i];
    $laporan[] = $p_pengawas_pu[$i];
    $laporan[] = $p_labor[$i];
    $laporan[] = $p_limbah[$i];
    $laporan[] = $p_security[$i];
    $laporan[] = $p_maintenance[$i];
}
// var_dump($laporan);
// die;

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
                            <h2 class="text-xl text-center font-weight-bold text-info text-uppercase mb-1">SISTEM PENILAIAN KINERJA KARYAWAN PT.IKA BINA AGRO WiSESA (IBAS)</h1>
                        </th>
                    </tr>
                </table>
            </div>
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> -->

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="filter:brightness(68%);" class="d-block w-100" src="<?= base_url("assets/img/"); ?>s1.jpeg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="text-white font-weight-bold">PABRIK KELAPA SAWIT</h3>
                                <h1 class="text-center text-white font-weight-bold">PT.IKA BINA AGRO WISESA (IBAS)</h1>
                                <h5 class="text-white font-weight-bold">GAMPONG GUHA ULEUE <br>KECAMATAN KUTAMAKMUR KABUPATEN ACEH UTARA</h5>
                            </div>
                        </div>

                        <!--  -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card shadow mb-2">
                    <div class="col-xl-12 col-md-6 mb-4 mt-5">
                        <h5 class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Karyawan</h3>
                            <div class="row mb-4">
                                <!-- // sortasi -->
                                <div class="col">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Sortasi</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sortasi; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // proses -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Proses</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $proses; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- // kantor -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Kantor</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kantor; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // supir -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Supir</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $supir; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // loader -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Loader</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $loader; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // excavator -->
                            <div class="row">
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Excavator</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $excavator; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // pengawas -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Pengawas PU</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pengawas_pu; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // labor -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Labor</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $labor; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // limbah -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Limbah</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $limbah; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // security -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Security</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $security; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- // maintenance -->
                                <div class="col">

                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bidang Maintenance</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $maintenance; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- karyawan terbaik -->
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card shadow mb-2">

                    <div class="col-xl-12 col-md-6 mb-4 mt-5">
                        <h5 class="text-xs font-weight-bold text-info text-uppercase mb-1">Karyawan Dengan Kinerja Terbaik Perbidang</h5>
                        <a class="btn btn-warning" href="<?= base_url('admin/pdf') ?>">Export</a>
                        <div class="row mb-4">
                            <table class="table table-bordered bg-info">
                                <tr class="text-white">
                                    <th>No</th>
                                    <th>Kode Alternatif</th>
                                    <th>Nama Karyawan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nilai Preferensi</th>
                                    <th>Bidang</th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($laporan as $data) : ?>
                                    <tr class="font-weight-bolder text-black">
                                        <td><?= $i; ?></td>
                                        <td><?= $data['kode_alternatif']; ?></td>
                                        <td><?= $data['nama_alternatif']; ?></td>
                                        <td><?= $data['jns_kelamin']; ?></td>
                                        <td><?= $data['preferensi']; ?></td>
                                        <td><?= $data['bidang']; ?></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <!-- <tr class="font-weight-bolder text-black">
                                    <td>1</td>
                                    <td>A13</td>
                                    <td>Khaerul Sadikin</td>
                                    <td>LAKI-LAKI</td>
                                    <td>0.8243</td>
                                    <td>Sortasi</td>
                                </tr>
                                <tr class="font-weight-bolder text-black">
                                    <td>2</td>
                                    <td>A27</td>
                                    <td>RAHMAT JUMAINI. H</td>
                                    <td>LAKI-LAKI</td>
                                    <td>0.9438</td>
                                    <td>Proses</td>
                                </tr>
                                <tr class="font-weight-bolder text-black">
                                    <td>3</td>
                                    <td>A64</td>
                                    <td>JUNAIDI </td>
                                    <td>LAKI-LAKI</td>
                                    <td>0.8152</td>
                                    <td>Kantor</td>
                                </tr> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OVERLAY -->