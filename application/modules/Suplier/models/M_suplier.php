<?php

class M_suplier extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    function tampil($table){
        $query = $this->db->query('select * from '.$table.' order by tambah asc');
        return $query->result();
    }
    function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function delete($where, $table)
    {
        $this->db->delete($table, $where);
    }
}
