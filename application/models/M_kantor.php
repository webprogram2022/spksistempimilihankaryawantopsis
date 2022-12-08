<?php
class M_kantor extends CI_Model
{
    public function hitung()
    {
        $alternatif = $this->db->get_where('alternatif', ['bidang' => 'kantor'])->result_array();
        
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
            $data[$i]['c5'] = (int)$alternatif[$i]['c5'];
        }
        $tc1 = 0;
        $tc2 = 0;
        $tc3 = 0;
        $tc4 = 0;
        $tc5 = 0;


        for ($i = 0; $i < count($data); $i++) {
            $tc1 += $data[$i]['c1'] ** 2;
            $tc2 += $data[$i]['c2'] ** 2;
            $tc3 += $data[$i]['c3'] ** 2;
            $tc4 += $data[$i]['c4'] ** 2;
            $tc5 += $data[$i]['c5'] ** 2;
        }
        for ($i = 0; $i < count($data); $i++) {
            $dataHasil = [
                'tc1' => sqrt($tc1),
                'tc2' => sqrt($tc2),
                'tc3' => sqrt($tc3),
                'tc4' => sqrt($tc4),
                'tc5' => sqrt($tc5)

            ];
        }
        $bn = [];
        foreach ($data as $i => $dt) {
            $arr = [];
            $arr['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $arr['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $arr['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            for ($i = 0; $i < 5; $i++) {
                // $arr['bn' . ($i + 1)] = $dt['c' . ($i + 1)] / $dataHasil['tc' . ($i + 1)];
                $arr['bn1'] = $dt['c1'] / $dataHasil['tc1'];
                $arr['bn2'] = $dt['c2'] / $dataHasil['tc2'];
                $arr['bn3'] = $dt['c3'] / $dataHasil['tc3'];
                $arr['bn4'] = $dt['c4'] / $dataHasil['tc4'];
                $arr['bn5'] = $dt['c5'] / $dataHasil['tc5'];
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
        $alternatif = $this->db->get_where('alternatif', ['bidang' => 'kantor'])->result_array();
    
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
            $data[$i]['c5'] = (int)$alternatif[$i]['c5'];
        }
        $tc1 = 0;
        $tc2 = 0;
        $tc3 = 0;
        $tc4 = 0;
        $tc5 = 0;

        for ($i = 0; $i < count($data); $i++) {
            $tc1 += $data[$i]['c1'] ** 2;
            $tc2 += $data[$i]['c2'] ** 2;
            $tc3 += $data[$i]['c3'] ** 2;
            $tc4 += $data[$i]['c4'] ** 2;
            $tc5 += $data[$i]['c5'] ** 2;
        }
        for ($i = 0; $i < count($data); $i++) {
            $dataHasil = [
                'tc1' => round(sqrt($tc1), 2),
                'tc2' => round(sqrt($tc2), 2),
                'tc3' => round(sqrt($tc3), 2),
                'tc4' => round(sqrt($tc4), 2),
                'tc5' => round(sqrt($tc5), 2)
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
                $arr['bn5'] = $dt['c5'] / $dataHasil['tc5'];
            }
            $bn[] = $arr;
        }
        $bnt = [];
        $bobotproses = [];

        $bobotproses = $this->db->get_where('kriteria', ['bidang' => 'kantor'])->result_array();
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
                $arr['bnt5'] = $bobotproses[0]['c5'] * $bn[$i]['bn5'];
            }
            $bnt[] = $arr;
        }
        return $bnt;
    }

    public function solusi_ideal_P()
    {
        $bnt = $this->normalisasi_terbobot();
        $c1 = [];
        $c2 = [];
        $c3 = [];
        $c4 = [];
        $c5 = [];

        foreach ($bnt as $i => $dt) {
            $c1[] = $dt['bnt1'];
            $c2[] = $dt['bnt2'];
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c5[] = $dt['bnt5'];
        }

        $max1 = max($c1);
        $max2 = max($c2);
        $max3 = max($c3);
        $max4 = max($c4);
        $max5 = max($c5);


        // Nilai A+
        $aP = [$max1, $max2, $max3, $max4, $max5];
        return $aP;
    }

    public function solusi_ideal_M()
    {
        $bnt = $this->normalisasi_terbobot();

        $c1 = [];
        $c2 = [];
        $c3 = [];
        $c4 = [];
        $c5 = [];

        foreach ($bnt as $i => $dt) {
            $c1[] = $dt['bnt1'];
            $c2[] = $dt['bnt2'];
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c5[] = $dt['bnt5'];
        }

        $min1 = min($c1);
        $min2 = min($c2);
        $min3 = min($c3);
        $min4 = min($c4);
        $min5 = min($c5);

        // Nilai A-
        $aM = [$min1, $min2, $min3, $min4, $min5];
        return $aM;
    }

    public function solusi_ideal()
    {
        $bnt = $this->normalisasi_terbobot();

        $c1 = [];
        $c2 = [];
        $c3 = [];
        $c4 = [];
        $c5 = [];


        foreach ($bnt as $i => $dt) {
            $c1[] = $dt['bnt1'];
            $c2[] = $dt['bnt2'];
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c5[] = $dt['bnt5'];
        }

        $max1 = max($c1);
        $max2 = max($c2);
        $max3 = max($c3);
        $max4 = max($c4);
        $max5 = max($c5);

        $min1 = min($c1);
        $min2 = min($c2);
        $min3 = min($c3);
        $min4 = min($c4);
        $min5 = min($c5);

        //Cari Nilai Max Setiap Kriteria
        $solusi_ideal = [];
        for ($i = 0; $i < count($bnt); $i++) {
            $solusi_ideal[$i]['kode_alternatif'] = $bnt[$i]['kode_alternatif'];
            $solusi_ideal[$i]['nama_alternatif'] = $bnt[$i]['nama_alternatif'];
            $solusi_ideal[$i]['jns_kelamin'] = $bnt[$i]['jns_kelamin'];
            $solusi_ideal[$i]['data_positif'] = sqrt(($bnt[$i]['bnt1'] - $max1) ** 2 + ($bnt[$i]['bnt2'] - $max2) ** 2 + ($bnt[$i]['bnt3'] - $max3) ** 2 + ($bnt[$i]['bnt4'] - $max4) ** 2 + ($bnt[$i]['bnt5'] - $max5) ** 2);
            $solusi_ideal[$i]['data_negatif'] = sqrt(($bnt[$i]['bnt1'] - $min1) ** 2 + ($bnt[$i]['bnt2'] - $min2) ** 2 + ($bnt[$i]['bnt3'] - $min3) ** 2 + ($bnt[$i]['bnt4'] - $min4) ** 2 + ($bnt[$i]['bnt5'] - $min5) ** 2);
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
            $preferensi[$i]['bidang'] = 'Kantor';
            $preferensi[$i]['preferensi'] = $solusi_ideal[$i]['data_negatif'] / ($solusi_ideal[$i]['data_negatif'] + $solusi_ideal[$i]['data_positif']);
        }
        return $preferensi;
    }
}
