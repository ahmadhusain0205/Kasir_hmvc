<?php
class Notif extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['judul'] = "Notif";
        $data['admin'] = $this->M_admin->get_data('admin');
        $data['petugas'] = $this->M_petugas->get_data('petugas');
        $data['suplier'] = $this->M_suplier->get_data('suplier');
        $data['pelanggan'] = $this->M_pelanggan->get_data('pelanggan');
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar',$data);
        $this->load->view('Templates/Topbar',$data);
        $this->load->view('V_notif', $data);
        $this->load->view('Templates/Footer');
    }
}