<?php
class Log extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_log');
        if ($this->session->userdata('status') != 'admin_login') {
            redirect('Block');
        }
    }
    function index(){
        $data['judul'] = "Aktivitas Log Petugas";
        $data['log'] = $this->M_log->get_data('log_activity')->result();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_log', $data);
        $this->load->view('Templates/Footer');
    }
    function delete()
    {
        $this->db->empty_table('log_activity');
        $this->session->set_flashdata('log', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> menghapus semua data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Log');
    }
}

?>