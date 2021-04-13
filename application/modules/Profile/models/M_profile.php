<?php
class M_profile extends CI_Model
{
    function get_data($table)
    {
        $this->db->SELECT('*');
        $this->db->FROM($table);
        $this->db->WHERE('id', $this->session->userdata('id'));
        return $this->db->get();
    }
}