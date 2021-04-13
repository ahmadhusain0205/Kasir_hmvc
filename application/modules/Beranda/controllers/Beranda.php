<?php
class Beranda extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_beranda');
        if (($this->session->userdata('status') != 'admin_login') && ($this->session->userdata('status') != 'petugas_login')) {
            redirect('login?alert=belum_login');
        }
    }
    function index(){
        $data['judul'] = "Beranda";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_beranda');
        $this->load->view('Templates/Footer');
    }
}

?>