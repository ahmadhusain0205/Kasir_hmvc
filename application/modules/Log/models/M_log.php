<?php
class M_log extends CI_Model
{
    function get_data($table)
    {
        $this->db->select($table.'.id as id_log, name, time_login, time_logout, keterangan');
        $this->db->from($table);
        $this->db->join('petugas', $table.'.id_petugas=petugas.id');
        return $this->db->get();
    }
}