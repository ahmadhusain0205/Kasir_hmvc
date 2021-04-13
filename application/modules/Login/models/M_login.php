<?php
class M_login extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    function insert($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function tambah($data_login, $table)
    {
        $this->db->insert($table, $data_login);
    }
    function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
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
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function get_id(){
        $this->db->select('id');
        if($this->session->userdata('status') == 'petugas_login'){
            $this->db->from('petugas');
        }
        return $this->db->get();
    }
}
