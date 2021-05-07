<?php
class Barang extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_barang');
    }
    function index(){
        $data['judul'] = "Halaman Barang";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_barang', $data);
        $this->load->view('Templates/Footer');
    }
}
