<?php
class M_beranda extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}