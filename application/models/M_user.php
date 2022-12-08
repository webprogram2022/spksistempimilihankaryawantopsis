<?php
class M_user extends CI_Model
{
    public function ubah_password($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
