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
<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>
    <h3 style="text-align: center;" class="text-xs font-weight-bold text-info text-uppercase mb-1">Karyawan Dengan Kinerja Terbaik Perbidang</h3>
    <div class="row mb-4">
        <table border="1" class="table table-bordered bg-info">
            <tr class="text-white">
                <th>Id Laporan</th>
                <th>Kode Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
                <th>Bidang</th>
                <th>Nilai Preferensi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($laporan as $data) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $data['kode_alternatif']; ?></td>
                    <td><?= $data['nama_alternatif']; ?></td>
                    <td><?= $data['jns_kelamin']; ?></td>
                    <td><?= $data['bidang']; ?></td>
                    <td><?= round($data['preferensi'],4); ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body></html>