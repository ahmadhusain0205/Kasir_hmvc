<?php
class Block extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['judul'] = "Block";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_block', $data);
        $this->load->view('Templates/Footer');
    }
}

?>