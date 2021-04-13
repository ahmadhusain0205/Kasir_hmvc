<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }
    function index()
    {
        $data['judul'] = 'Halaman Login';
        $this->load->view('Templates/Header_login', $data);
        $this->load->view('V_login');
        $this->load->view('Templates/Footer_login');
    }
    function login_aksi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $sebagai = $this->input->post('sebagai');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() != false) {
            $where = array(
                'username' => $username,
                'password' => SHA1($password)
            );
            if ($sebagai == 'admin') {
                $cek = $this->M_login->cek_login('admin', $where)->num_rows();
                $data = $this->M_login->cek_login('admin', $where)->row();
                if ($cek > 0) {
                    $data_session = array(
                        'id' => $data->id,
                        'username' => $data->username,
                        'name' => $data->name,
                        'status' => 'admin_login',
                        'sebagai' => 'Administrator'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('Beranda');
                } else {
                    redirect('login?alert=gagal');
                }
            } elseif ($sebagai == 'petugas') {
                $cek = $this->M_login->cek_login('petugas', $where)->num_rows();
                $data = $this->M_login->cek_login('petugas', $where)->row();
                if ($cek > 0) {
                    $data_session = array(
                        'id' => $data->id,
                        'name' => $data->name,
                        'username' => $data->username,
                        'status' => 'petugas_login',
                        'sebagai' => 'Pegawai',
                        'time_login' => date('Y-m-d H:i:s')
                    );
                    $this->session->set_userdata($data_session);
                    $id = $this->session->userdata('id');
                    redirect('Beranda');
                } else {
                    redirect('login?alert=gagal');
                }
            }
        } else {
            $data['judul'] = 'Login';
            $this->load->view('Templates/Header_login', $data);
            $this->load->view('V_login');
            $this->load->view('Templates/Footer_login');
        }
    }
    function logout()
    {
        if($this->session->userdata('status') == "petugas_login")
        {
            $id = $this->session->userdata('id');
            $time_login = $this->session->userdata('time_login');
            $data_login = array(
                'id_petugas' => $id,
                'time_login' => $time_login,
                'time_logout' => date('Y-m-d H:i:s'),
                'keterangan' => "Lama Bekerja"
            );
            $this->M_login->tambah($data_login, 'log_activity');
        }
        $this->session->sess_destroy();
        redirect('login?alert=logout');
    }
}
