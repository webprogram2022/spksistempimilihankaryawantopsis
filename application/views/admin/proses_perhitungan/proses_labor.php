<?php

$nilaib1 = [];
foreach ($preferensi as $key => $data) {
    $nilaib1[$key] = $data['preferensi'];
}
array_multisort($nilaib1, SORT_DESC, $preferensi);
$laporan = [];
for ($i = 0; $i < count($preferensi); $i++) {
    $laporan[] = $preferensi[$i];
}


?>
<!-- START PAGE CONTENT WRAPPER -->
<div class="page-content-wrapper ">
    <!-- START PAGE CONTENT -->
    <div class="content sm-gutter">
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid padding-25 sm-padding-10">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                <div class="row">
                        <div class="card shadow col-xl-12">
                            <table class="table table-bordered mb-2">
                                <tr>
                                    <th class="text-center text-white bg-info">Kriteria</th>
                                    <td class="text-black font-weight-bold">C1</td>
                                <td class="text-black font-weight-bold">C2</td>
                                <td class="text-black font-weight-bold">C3</td>
                                <td class="text-black font-weight-bold">C4</td>
                                <td class="text-black font-weight-bold">C8</td>
                                </tr>
                                <tr>
                                    <th class="text-center text-white bg-info">Keterangan</th>
                                    <td class="text-black font-weight-bold">Rendemen</td>
                                    <td class="text-black font-weight-bold">Tonase</td>
                                    <td class="text-black font-weight-bold">Absensi</td>
                                    <td class="text-black font-weight-bold">Kebersihan</td>
                                    <td class="text-black font-weight-bold">Klaim</td>

                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="card shadow mb-2">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between m-3">
                            <div class="text-left">
                                <h4>MATRIK TERNORMALISASI</h4>
                                <h5 class="text-bold">Bidang Labor</h5>
                            </div>
                        </div>
                        <div class="card shadow col-xl-11 m-3">
                            <table class="table table-striped">
                                <tr>
                                    <th class="bg-info text-white">
                                        No
                                    </th>
                                    <th class="bg-info text-white">
                                        Kode Karyawan
                                    </th>
                                    <th class="bg-info text-white">
                                        Nama Karyawan
                                    </th>
                                    <th class="bg-info text-white">
                                        Jenis Kelamin
                                    </th>
                                    <th class="bg-info text-white">
                                        C1
                                    </th>
                                    <th class="bg-info text-white">
                                        C2
                                    </th>
                                    <th class="bg-info text-white">
                                        C3
                                    </th>
                                    <th class="bg-info text-white">
                                        C4
                                    </th>
                                    <th class="bg-info text-white">
                                        C8
                                    </th>
                                </tr>
                                <?php $i = 1; ?>
                                <?php foreach ($hitung as $data) : ?>
                                    <tr class="font-weight-bolder text-black">
                                        <td>
                                            <?= $i; ?>
                                        </td>
                                        <td>
                                            <?= $data['kode_alternatif']; ?>
                                        </td>
                                        <td>
                                            <?= $data['nama_alternatif']; ?>
                                        </td>
                                        <td>
                                            <?= $data['jns_kelamin']; ?>
                                        </td>
                                        <td>
                                            <?= round($data['bn1'], 4); ?>
                                        </td>
                                        <td>
                                            <?= round($data['bn2'], 4); ?>
                                        </td>
                                        <td>
                                            <?= round($data['bn3'], 4); ?>
                                        </td>
                                        <td>
                                            <?= round($data['bn4'], 4); ?>
                                        </td>
                                        <td>
                                            <?= round($data['bn8'], 4); ?>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </table>
                        </div>

                        <div class="card shadow mb-2">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between m-3">
                                <div class="text-left">
                                    <h4>MATRIK TERNORMALISASI BERBOBOT</h4>
                                    <h5 class="text-bold">Bidang Labor</h5>
                                </div>
                            </div>
                            <div class="card shadow col-xl-11 m-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="bg-info text-white">
                                            No
                                        </th>
                                        <th class="bg-info text-white">
                                            Kode Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Nama Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Jenis Kelamin
                                        </th>
                                        <th class="bg-info text-white">
                                            C1
                                        </th>
                                        <th class="bg-info text-white">
                                            C2
                                        </th>
                                        <th class="bg-info text-white">
                                            C3
                                        </th>
                                        <th class="bg-info text-white">
                                            C4
                                        </th>
                                        <th class="bg-info text-white">
                                            C8
                                        </th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($ntbobot as $data) : ?>
                                        <tr class="font-weight-bolder text-black">
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $data['kode_alternatif']; ?>
                                            </td>
                                            <td>
                                                <?= $data['nama_alternatif']; ?>
                                            </td>
                                            <td>
                                                <?= $data['jns_kelamin']; ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt1'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt2'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt4'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt4'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt8'], 4); ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                        <div class="card shadow mb-2">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between m-3">
                                <div class="text-left">
                                    <h4>MATRIKS TERNORMALISASI BERBOBOT</h4>
                                    <h5 class="text-bold">Bidang Sortasi</h5>
                                </div>
                            </div>
                            <div class="card shadow col-xl-11 m-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="bg-info text-white">
                                            No
                                        </th>
                                        <th class="bg-info text-white">
                                            Kode Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Nama Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Jenis Kelamin
                                        </th>
                                        <th class="bg-info text-white">
                                            C1
                                        </th>
                                        <th class="bg-info text-white">
                                            C2
                                        </th>
                                        <th class="bg-info text-white">
                                            C3
                                        </th>
                                        <th class="bg-info text-white">
                                            C4
                                        </th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($ntbobot as $data) : ?>
                                        <tr class="font-weight-bolder text-black">
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $data['kode_alternatif']; ?>
                                            </td>
                                            <td>
                                                <?= $data['nama_alternatif']; ?>
                                            </td>
                                            <td>
                                                <?= $data['jns_kelamin']; ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt1'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt2'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt3'], 4); ?>
                                            </td>
                                            <td>
                                                <?= round($data['bnt4'], 4); ?>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>



                                </table>
                            </div>
                        </div>
                        <!-- Solusi Ideal -->
                        <div class="card shadow mb-2">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between m-3">
                                <div class="text-left">
                                    <h4>Solusi Ideal Positif dan Negatif</h4>
                                    <h5 class="text-bold">Bidang Labor</h5>
                                </div>
                            </div>
                            <div class="card shadow col-xl-11 m-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="bg-info text-white">
                                            No
                                        </th>
                                        <th class="bg-info text-white">
                                            Kode Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Nama Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Jenis Kelamin
                                        </th>
                                        <th class="bg-info text-white">
                                            D+
                                        </th>
                                        <th class="bg-info text-white">
                                            D-
                                        </th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($max as $data) : ?>
                                        <tr class="font-weight-bolder text-black">
                                            <td><?= $i; ?></td>
                                            <td><?= $data['kode_alternatif']; ?></td>
                                            <td><?= $data['nama_alternatif']; ?></td>
                                            <td><?= $data['jns_kelamin']; ?></td>
                                            <td><?= round($data['data_positif'], 4); ?></td>
                                            <td><?= $data['data_negatif']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>

                        <div class="card shadow mb-2">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between m-3">
                                <div class="text-left">
                                    <h4>PREFERENSI</h4>
                                    <h5 class="text-bold">Bidang Labor</h5>
                                </div>
                            </div>
                            <div class="card shadow col-xl-11 m-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="bg-info text-white">
                                            No
                                        </th>
                                        <th class="bg-info text-white">
                                            Kode Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Nama Karyawan
                                        </th>
                                        <th class="bg-info text-white">
                                            Jenis Kelamin
                                        </th>
                                        <th class="bg-info text-white">
                                            Nilai
                                        </th>
                                        <th class="bg-info text-white">
                                            Rangking
                                        </th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($preferensi as $data) : ?>
                                        <tr class="font-weight-bolder text-black">
                                            <td><?= $i; ?></td>
                                            <td><?= $data['kode_alternatif']; ?></td>
                                            <td><?= $data['nama_alternatif']; ?></td>
                                            <td><?= $data['jns_kelamin']; ?></td>
                                            <td><?= $data['preferensi']; ?></td>
                                            <td>
                                                <h6 class="font-weight-bold text-success"><?= $i; ?></h2>

                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>


                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- END OVERLAY -->