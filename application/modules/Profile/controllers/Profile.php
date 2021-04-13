<?php
class Profile extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_profile');
    }
    function index(){
        if ($this->session->userdata('status') == 'admin_login') {
            $data['profile'] = $this->M_profile->get_data('admin')->result();
        } else {
            $data['profile'] = $this->M_profile->get_data('petugas')->result();
        }
        $data['judul'] = 'My Profile';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('V_profile', $data);
        $this->load->view('Templates/Footer');
    }
}
