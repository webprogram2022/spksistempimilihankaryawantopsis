<?php
class M_security extends CI_Model
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
       $alternatif = $this->db->get_where('alternatif', ['bidang' => 'security'])->result_array();
       
        $dataHasil = [];
        $data = [];
        for ($i = 0; $i < count($alternatif); $i++) {

            $data[$i]['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $data[$i]['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $data[$i]['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];

            $data[$i]['c3'] = (int)$alternatif[$i]['c3'];
            $data[$i]['c4'] = (int)$alternatif[$i]['c4'];
            $data[$i]['c5'] = (int)$alternatif[$i]['c5'];
            $data[$i]['c9'] = (int)$alternatif[$i]['c9'];
            $data[$i]['c10'] = (int)$alternatif[$i]['c10'];
        }

        $tc3 = 0;
        $tc4 = 0;
        $tc5 = 0;
        $tc9 = 0;
        $tc10 = 0;


        for ($i = 0; $i < count($data); $i++) {

            $tc3 += $data[$i]['c3'] ** 2;
            $tc4 += $data[$i]['c4'] ** 2;
            $tc5 += $data[$i]['c5'] ** 2;
            $tc9 += $data[$i]['c9'] ** 2;
            $tc10 += $data[$i]['c10'] ** 2;
        }
        for ($i = 0; $i < count($data); $i++) {
            $dataHasil = [
                'tc3' => sqrt($tc3),
                'tc4' => sqrt($tc4),
                'tc5' => sqrt($tc5),
                'tc9' => sqrt($tc9),
                'tc10' => sqrt($tc10)
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

                $arr['bn3'] = $dt['c3'] / $dataHasil['tc3'];
                $arr['bn4'] = $dt['c4'] / $dataHasil['tc4'];
                $arr['bn5'] = $dt['c5'] / $dataHasil['tc5'];
                $arr['bn9'] = $dt['c9'] / $dataHasil['tc9'];
                $arr['bn10'] = $dt['c10'] / $dataHasil['tc10'];
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
       $alternatif = $this->db->get_where('alternatif', ['bidang' => 'security'])->result_array();
        
        $dataHasil = [];
        $data = [];
        for ($i = 0; $i < count($alternatif); $i++) {

            $data[$i]['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $data[$i]['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $data[$i]['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];

            $data[$i]['c3'] = (int)$alternatif[$i]['c3'];
            $data[$i]['c4'] = (int)$alternatif[$i]['c4'];
            $data[$i]['c5'] = (int)$alternatif[$i]['c5'];
            $data[$i]['c9'] = (int)$alternatif[$i]['c9'];
            $data[$i]['c10'] = (int)$alternatif[$i]['c10'];
        }
        $tc3 = 0;
        $tc4 = 0;
        $tc5 = 0;
        $tc9 = 0;
        $tc10 = 0;


        for ($i = 0; $i < count($data); $i++) {
            $tc3 += $data[$i]['c3'] ** 2;
            $tc4 += $data[$i]['c4'] ** 2;
            $tc5 += $data[$i]['c5'] ** 2;
            $tc9 += $data[$i]['c9'] ** 2;
            $tc10 += $data[$i]['c10'] ** 2;
        }
        for ($i = 0; $i < count($data); $i++) {
            $dataHasil = [
                'tc3' => sqrt($tc3),
                'tc4' => sqrt($tc4),
                'tc5' => sqrt($tc5),
                'tc9' => sqrt($tc9),
                'tc10' => sqrt($tc10)

            ];
        }
        // $bn1 = 0;
        // $bn5 = 0;
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

                $arr['bn3'] = $dt['c3'] / $dataHasil['tc3'];
                $arr['bn4'] = $dt['c4'] / $dataHasil['tc4'];
                $arr['bn5'] = $dt['c5'] / $dataHasil['tc5'];
                $arr['bn9'] = $dt['c9'] / $dataHasil['tc9'];
                $arr['bn10'] = $dt['c10'] / $dataHasil['tc10'];
            }
            $bn[] = $arr;
        }
        $bnt = [];
        $bobotproses = [];

        $bobotproses = $this->db->get_where('kriteria', ['bidang' => 'security'])->result_array();
        foreach ($data as $i => $dt) {
            $arr = [];
            $arr['kode_alternatif'] = $alternatif[$i]['kode_alternatif'];
            $arr['nama_alternatif'] = $alternatif[$i]['nama_alternatif'];
            $arr['jns_kelamin'] = $alternatif[$i]['jns_kelamin'];
            for ($j = 0; $j < count($bn); $j++) {
                $arr['bnt3'] = $bobotproses[0]['c3'] * $bn[$i]['bn3'];
                $arr['bnt4'] = $bobotproses[0]['c4'] * $bn[$i]['bn4'];
                $arr['bnt5'] = $bobotproses[0]['c5'] * $bn[$i]['bn5'];
                $arr['bnt9'] = $bobotproses[0]['c9'] * $bn[$i]['bn9'];
                $arr['bnt10'] = $bobotproses[0]['c10'] * $bn[$i]['bn10'];
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

        $c3 = [];
        $c4 = [];
        $c5 = [];
        $c9 = [];
        $c10 = [];

        foreach ($bnt as $i => $dt) {
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c5[] = $dt['bnt5'];
            $c9[] = $dt['bnt9'];
            $c10[] = $dt['bnt10'];
        }

        $max3 = max($c3);
        $max4 = max($c4);
        $max5 = max($c5);
        $max9 = max($c9);
        $max10 = max($c10);
        // Nilai A-
        $aP = [$max3, $max4, $max5, $max9, $max10];
        return $aP;
    }

    public function solusi_ideal_M()
    {
        $bnt = $this->normalisasi_terbobot();

        $c3 = [];
        $c4 = [];
        $c5 = [];
        $c9 = [];
        $c10 = [];

        foreach ($bnt as $i => $dt) {
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c5[] = $dt['bnt5'];
            $c9[] = $dt['bnt9'];
            $c10[] = $dt['bnt10'];
        }

        $min3 = min($c3);
        $min4 = min($c4);
        $min5 = min($c5);
        $min9 = min($c9);
        $min10 = min($c10);
        // Nilai A-
        $aM = [$min3, $min4, $min5, $min9, $min10];
        return $aM;
    }
    public function solusi_ideal()
    {
        $bnt = $this->normalisasi_terbobot();

        $c3 = [];
        $c4 = [];
        $c5 = [];
        $c9 = [];
        $c10 = [];


        foreach ($bnt as $i => $dt) {
            $c3[] = $dt['bnt3'];
            $c4[] = $dt['bnt4'];
            $c5[] = $dt['bnt5'];
            $c9[] = $dt['bnt9'];
            $c10[] = $dt['bnt10'];
        }

        $max3 = max($c3);
        $max4 = max($c4);
        $max5 = max($c5);
        $max9 = max($c9);
        $max10 = max($c10);


        $min3 = min($c3);
        $min4 = min($c4);
        $min5 = min($c5);
        $min9 = min($c9);
        $min10 = min($c10);


        //Cari Nilai Max Setiap Kriteria
        $solusi_ideal = [];
        for ($i = 0; $i < count($bnt); $i++) {
            $solusi_ideal[$i]['kode_alternatif'] = $bnt[$i]['kode_alternatif'];
            $solusi_ideal[$i]['nama_alternatif'] = $bnt[$i]['nama_alternatif'];
            $solusi_ideal[$i]['jns_kelamin'] = $bnt[$i]['jns_kelamin'];
            $solusi_ideal[$i]['data_negatif'] = sqrt(($bnt[$i]['bnt3'] - $min3) ** 2 + ($bnt[$i]['bnt4'] - $min4) ** 2 + ($bnt[$i]['bnt5'] - $min5) ** 2 + ($bnt[$i]['bnt9'] - $min9) ** 2 + ($bnt[$i]['bnt10'] - $min10) ** 2);
            $solusi_ideal[$i]['data_positif'] = sqrt(($bnt[$i]['bnt3'] - $max3) ** 2 + ($bnt[$i]['bnt4'] - $max4) ** 2 + ($bnt[$i]['bnt5'] - $max5) ** 2 + ($bnt[$i]['bnt9'] - $max9) ** 2 + ($bnt[$i]['bnt10'] - $max10) ** 2);
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
            $preferensi[$i]['bidang'] = 'Security';

            $preferensi[$i]['preferensi'] = ($solusi_ideal[$i]['data_negatif']) / ($solusi_ideal[$i]['data_negatif'] + $solusi_ideal[$i]['data_positif']);
        }
        return $preferensi;
    }
}
