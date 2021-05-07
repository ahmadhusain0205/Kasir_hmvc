<?php
class Unit extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_unit');
    }
    function index(){
        $data['judul'] = "Halaman Unit";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_unit', $data);
        $this->load->view('Templates/Footer');
    }
}
