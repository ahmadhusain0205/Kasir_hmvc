<?php
class Petugas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_petugas');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|trim');
        if ($this->session->userdata('status') != 'admin_login') {
            redirect('Block');
        }
    }
    function index()
    {
        $data['petugas'] = $this->M_petugas->get_data('petugas')->result();
        $data['judul'] = 'Halaman Petugas';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('V_petugas', $data);
        $this->load->view('Templates/Footer');
    }
    function ganti_password()
    {
        $data['judul'] = 'Edit Password';
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar', $data);
        $this->load->view('Templates/Topbar', $data);
        $this->load->view('V_edit', $data);
        $this->load->view('Templates/Footer');
    }
    function password_aksi()
    {
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('petugas', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> mengubah password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Petugas/ganti_password');
        } else {
            $baru = $this->input->post('password_baru');
            $ulang = $this->input->post('password_ulang');
            $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|matches[password_ulang]');
            $this->form_validation->set_rules('password_ulang', 'Ulangi Password', 'required');
            $id = $this->session->userdata('id');
            $where = array('id' => $id);
            $data = array('password' => $baru);
            $this->M_petugas->update($where, $data, 'admin');
            $this->session->set_flashdata('petugas', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> mengubah password.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Petugas/ganti_password');
        }
    }
    function tambah()
    {
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('petugas', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> menambahkan data.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Petugas');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $alamat = $this->input->post('alamat');
            $no_telp = $this->input->post('no_telp');
            $data = array(
                'username' => $username,
                'password' => SHA1($password),
                'name' => $name,
                'alamat' => $alamat,
                'no_telp' => $no_telp
            );
            $this->M_petugas->insert($data, 'petugas');
            $this->session->set_flashdata('petugas', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> menambahkan data.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Petugas');
        }
    }
    function edit()
    {
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('petugas', '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> mengubah data.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Petugas');
        }else{
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $alamat = $this->input->post('alamat');
            $no_telp = $this->input->post('no_telp');
            $data = array(
                'username' => $username,
                'password' => SHA1($password),
                'name' => $name,
                'alamat' => $alamat,
                'no_telp' => $no_telp
            );
            $this->db->where('id', $id);
            $this->db->update('petugas', $data);
            $this->session->set_flashdata('petugas', '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> mengubah data.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
            redirect('Petugas');
        }
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_petugas->delete($where, 'petugas');
        $this->session->set_flashdata('petugas', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> menghapus data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Petugas');
    }
}
