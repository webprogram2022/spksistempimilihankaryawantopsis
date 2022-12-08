<?php
class M_loader extends CI_Model
{
    public function get_bidang($bidang)
    {
        return $this->db->get_where('alternatif', ['bidang' => $bidang])->result_array();
    }
    public function hapusAlternatif($id, $bidang)
    {
        $this->db->delete($bidang, ['id' => $id]);
        redirect('admin/alternatif');
    }

    public function countAlternatif($bidang)
    {
        $alternatif = $this->db->get_where('alternatif', ['bidang' => $bidang])->result_array();
        $data = count($alternatif);
        return $data;
    }
    public function hitung()
    {
       $alternatif = $this->db->get_where('alternatif', ['bidang' => 'loader'])->result_array();
        $dataHasil = [];
        $data = [];
        for ($i = 0; $i < count($alternatif); $i++) {

            $data[$i]['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $data[$i]['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $data[$i]['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            $data[$i]['c1'] = (int)$alternatif[$i]['c1'];
            $data[$i]['c2'] = (int)$alternatif[$i]['c2'];
            $data[$i]['c3'] = (int)$alternatif[$i]['c3'];
            $data[$i]['c4'] = (int)$alternatif[$i]['c4'];
            $data[$i]['c11'] = (int)$alternatif[$i]['c11'];
            $data[$i]['c12'] = (int)$alternatif[$i]['c12'];
        }
        $tc1 = 0;
        $tc2 = 0;
        $tc3 = 0;
        $tc4 = 0;
        $tc11 = 0;
        $tc12 = 0;

        for ($i = 0; $i < count($data); $i++) {
            $tc1 += $data[$i]['c1'] ** 2;
            $tc2 += $data[$i]['c2'] ** 2;
            $tc3 += $data[$i]['c3'] ** 2;
            $tc4 += $data[$i]['c4'] ** 2;
            $tc11 += $data[$i]['c11'] ** 2;
            $tc12 += $data[$i]['c12'] ** 2;
        }
        for ($i = 0; $i < count($data); $i++) {
            $dataHasil = [
                'tc1' => sqrt($tc1),
                'tc2' => sqrt($tc2),
                'tc3' => sqrt($tc3),
                'tc4' => sqrt($tc4),
                'tc11' => sqrt($tc11),
                'tc12' => sqrt($tc12)
            ];
        }
        $bn = [];
        foreach ($data as $i => $dt) {
            $arr = [];
            $arr['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $arr['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $arr['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            for ($i = 0; $i < 4; $i++) {
                // $arr['bn' . ($i + 1)] = $dt['c' . ($i + 1)] / $dataHasil['tc' . ($i + 1)];
                $arr['bn1'] = $dt['c1'] / $dataHasil['tc1'];
                $arr['bn2'] = $dt['c2'] / $dataHasil['tc2'];
                $arr['bn3'] = $dt['c3'] / $dataHasil['tc3'];
                $arr['bn4'] = $dt['c4'] / $dataHasil['tc4'];
                $arr['bn11'] = $dt['c11'] / $dataHasil['tc11'];
                $arr['bn12'] = $dt['c12'] / $dataHasil['tc12'];
            }
            $bn[] = $arr;
        }
        return $bn;
        // return $tc1;
        // return $dataHasil;
        // return $t;
    }

    public function normalisasi_terbobot()
    {
       $alternatif = $this->db->get_where('alternatif', ['bidang' => 'loader'])->result_array();
        
        $dataHasil = [];
        $data = [];
        for ($i = 0; $i < count($alternatif); $i++) {

            $data[$i]['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $data[$i]['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $data[$i]['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            $data[$i]['c1'] = (int)$alternatif[$i]['c1'];
            $data[$i]['c2'] = (int)$alternatif[$i]['c2'];
            $data[$i]['c3'] = (int)$alternatif[$i]['c3'];
            $data[$i]['c4'] = (int)$alternatif[$i]['c4'];
            $data[$i]['c11'] = (int)$alternatif[$i]['c11'];
            $data[$i]['c12'] = (int)$alternatif[$i]['c12'];
        }
        $tc1 = 0;
        $tc2 = 0;
        $tc3 = 0;
        $tc4 = 0;
        $tc11 = 0;
        $tc12 = 0;


        for ($i = 0; $i < count($data); $i++) {
            $tc1 += $data[$i]['c1'] ** 2;
            $tc2 += $data[$i]['c2'] ** 2;
            $tc3 += $data[$i]['c3'] ** 2;
            $tc4 += $data[$i]['c4'] ** 2;
            $tc11 += $data[$i]['c11'] ** 2;
            $tc12 += $data[$i]['c12'] ** 2;
        }
        for ($i = 0; $i < count($data); $i++) {
            $dataHasil = [
                'tc1' => sqrt($tc1),
                'tc2' => sqrt($tc2),
                'tc3' => sqrt($tc3),
                'tc4' => sqrt($tc4),
                'tc11' => sqrt($tc11),
                'tc12' => sqrt($tc12)

            ];
        }
        // $bn1 = 0;
        // $bn2 = 0;
        // $bn3 = 0;
        // $bn4 = 0;
        $bn = [];
        foreach ($data as $i => $dt) {
            $arr = [];
            $arr['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $arr['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $arr['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            for ($i = 0; $i < 4; $i++) {
                // $arr['bn' . ($i + 1)] = $dt['c' . ($i + 1)] / $dataHasil['tc' . ($i + 1)];
                $arr['bn1'] = $dt['c1'] / $dataHasil['tc1'];
                $arr['bn2'] = $dt['c2'] / $dataHasil['tc2'];
                $arr['bn3'] = $dt['c3'] / $dataHasil['tc3'];
                $arr['bn4'] = $dt['c4'] / $dataHasil['tc4'];
                $arr['bn11'] = $dt['c11'] / $dataHasil['tc11'];
                $arr['bn12'] = $dt['c12'] / $dataHasil['tc12'];
            }
            $bn[] = $arr;
        }
        $bnt = [];
        $bobotproses = [];

        $bobotproses = $this->db->get_where('kriteria', ['bidang' => 'loader'])->result_array();
        foreach ($data as $i => $dt) {
            $arr = [];
            $arr['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $arr['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $arr['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            for ($j = 0; $j < count($bn); $j++) {
                $arr['bnt1'] = $bobotproses[0]['c1'] * $bn[$i]['bn1'];
                $arr['bnt2'] = $bobotproses[0]['c2'] * $bn[$i]['bn2'];
                $arr['bnt3'] = $bobotproses[0]['c3'] * $bn[$i]['bn3'];
                $arr['bnt4'] = $bobotproses[0]['c4'] * $bn[$i]['bn4'];
                $arr['bnt11'] = $bobotproses[0]['c11'] * $bn[$i]['bn11'];
                $arr['bnt12'] = $bobotproses[0]['c12'] * $bn[$i]['bn12'];
            }
            $bnt[] = $arr;
        }
        return $bnt;
        // return   $bobotproses;
        // die;
    }

    public function solusi_ideal_P()
    {
        $bnt = $this->normalisasi_terbobot();

        $c1 = [];
        $c2 = [];
        $c3 = [];
        $c4 = [];
        $c11 = [];
        $c12 = [];

        foreach ($bnt as $i => $dt) {
            $c1[] = $dt['bnt1'];
            $c2[] = $dt['bnt2'];
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c11[] = $dt['bnt11'];
            $c12[] = $dt['bnt12'];
        }

        $max1 = max($c1);
        $max2 = max($c2);
        $max3 = max($c3);
        $max4 = max($c4);
        $max11 = max($c11);
        $min12 = min($c12);

        // Nilai A+
        $aP = [$max1, $max2, $max3, $max4, $max11, $min12];
        return $aP;
    }

    public function solusi_ideal_M()
    {
        $bnt = $this->normalisasi_terbobot();

        $c1 = [];
        $c2 = [];
        $c3 = [];
        $c4 = [];
        $c11 = [];
        $c12 = [];

        foreach ($bnt as $i => $dt) {
            $c1[] = $dt['bnt1'];
            $c2[] = $dt['bnt2'];
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c11[] = $dt['bnt11'];
            $c12[] = $dt['bnt12'];
        }

        $min1 = min($c1);
        $min2 = min($c2);
        $min3 = min($c3);
        $min4 = min($c4);
        $min11 = min($c11);
        $max12 = max($c12);

        // Nilai A-
        $aM = [$min1, $min2, $min3, $min4, $min11, $max12];
        return $aM;
    }

    public function solusi_ideal()
    {
        $bnt = $this->normalisasi_terbobot();

        $c1 = [];
        $c2 = [];
        $c3 = [];
        $c4 = [];
        $c11 = [];
        $c12 = [];


        foreach ($bnt as $i => $dt) {
            $c1[] = $dt['bnt1'];
            $c2[] = $dt['bnt2'];
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c11[] = $dt['bnt11'];
            $c12[] = $dt['bnt12'];
        }

        $max1 = max($c1);
        $max2 = max($c2);
        $max3 = max($c3);
        $max4 = max($c4);
        $max11 = max($c11);
        $max12 = max($c12);


        $min1 = min($c1);
        $min2 = min($c2);
        $min3 = min($c3);
        $min4 = min($c4);
        $min11 = min($c11);
        $min12 = min($c12);


        //Cari Nilai Max Setiap Kriteria
        $solusi_ideal = [];
        for ($i = 0; $i < count($bnt); $i++) {
            $solusi_ideal[$i]['kode_alternatif'] = $bnt[$i]['kode_alternatif'];
            $solusi_ideal[$i]['nama_alternatif'] = $bnt[$i]['nama_alternatif'];
            $solusi_ideal[$i]['jns_kelamin'] = $bnt[$i]['jns_kelamin'];

            $solusi_ideal[$i]['data_positif'] = sqrt(($bnt[$i]['bnt1'] - $max1) ** 2 + ($bnt[$i]['bnt2'] - $max2) ** 2 + ($bnt[$i]['bnt3'] - $max3) ** 2 + ($bnt[$i]['bnt4'] - $max4) ** 2 + ($bnt[$i]['bnt11'] - $max11) ** 2 + ($bnt[$i]['bnt12'] - $min12) ** 2);
            $solusi_ideal[$i]['data_negatif'] = sqrt(($bnt[$i]['bnt1'] - $min1) ** 2 + ($bnt[$i]['bnt2'] - $min2) ** 2 + ($bnt[$i]['bnt3'] - $min3) ** 2 + ($bnt[$i]['bnt4'] - $min4) ** 2 + ($bnt[$i]['bnt11'] - $min11) ** 2 + ($bnt[$i]['bnt12'] - $max12) ** 2);
        }
        return $solusi_ideal;
        // return $maxc1;

    }

    public function preferensi()
    {
        $solusi_ideal = $this->solusi_ideal();

        $preferensi = [];
        for ($i = 0; $i < count($solusi_ideal); $i++) {
            $preferensi[$i]['kode_alternatif'] = $solusi_ideal[$i]['kode_alternatif'];
            $preferensi[$i]['nama_alternatif'] = $solusi_ideal[$i]['nama_alternatif'];
            $preferensi[$i]['jns_kelamin'] = $solusi_ideal[$i]['jns_kelamin'];
            $preferensi[$i]['bidang'] = 'Loader';

            $preferensi[$i]['preferensi'] = ($solusi_ideal[$i]['data_negatif']) / ($solusi_ideal[$i]['data_negatif'] + $solusi_ideal[$i]['data_positif']);
        }
        return $preferensi;
    }
}
