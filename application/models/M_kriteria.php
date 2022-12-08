<?php
class M_kriteria extends CI_Model
{
    public function get_kriteria($bidang)
    {
        return $this->db->get_where('kriteria', ['bidang' => $bidang])->result_array();
    }
    public function ubahKriteria($bidang, $data)
    {
        $this->db->where(['bidang' => $bidang]);
        $this->db->update('kriteria', $data);
    }
}
