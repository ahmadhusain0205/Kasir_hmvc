<?php
class Kategori extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_kategori');
    }
    function index(){
        $data['judul'] = "Halaman Kategori";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_kategori', $data);
        $this->load->view('Templates/Footer');
    }
}
