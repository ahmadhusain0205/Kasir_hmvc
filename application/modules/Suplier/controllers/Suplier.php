<?php
class Suplier extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_suplier');
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No Telpon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tambah', 'Tanggal Suplai', 'required|trim');
        $this->form_validation->set_rules('ubah', 'Ubah', 'required|trim');
        if (($this->session->userdata('status') != 'admin_login') && ($this->session->userdata('status') != 'petugas_login')) {
            redirect('login?alert=belum_login');
        }
    }
    function index(){
        $data['judul'] = "Suplier";
        $data['suplier'] = $this->M_suplier->tampil('suplier');
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_suplier', $data);
        $this->load->view('Templates/Footer');
    }
    function tambah(){
        $data['judul'] = "Tambah Data Suplier";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_tambah', $data);
        $this->load->view('Templates/Footer');
    }
    function tambah_data()
    {
        $name = $this->input->post('name');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $tambah = $this->input->post('tambah');
        $ubah = $this->input->post('ubah');
        $data = array(
            'name' => $name,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'deskripsi' => $deskripsi,
            'tambah' => $tambah,
            'ubah' => $ubah
        );
        $this->M_suplier->insert($data, 'suplier');
        $this->session->set_flashdata('suplier', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> menambahkan data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Suplier');
    }
    function edit($id){
        $where = array('id' => $id);
        $data['suplier']= $this->M_suplier->edit_data($where,'suplier')->result();
        $data['judul'] = "Ubah Data Suplier";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_ubah', $data);
        $this->load->view('Templates/Footer');
    }
    function update(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $no_telp = $this->input->post('no_telp');
        $alamat = $this->input->post('alamat');
        $deskripsi = $this->input->post('deskripsi');
        $tambah = $this->input->post('tambah');
        $ubah = $this->input->post('ubah');
        $where = array('id' => $id);
        if ($password == '') {
            $data = array(
                'name' => $name,
                'no_telp' => $no_telp,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'tambah' => $tambah,
                'ubah' => $ubah
            );
            $this->M_suplier->update($where, $data, 'suplier');
        } else {
            $data = array(
                'name' => $name,
                'no_telp' => $no_telp,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'tambah' => $tambah,
                'ubah' => $ubah
            );
            $this->M_suplier->update($where, $data, 'suplier');
        }
        $this->session->set_flashdata('suplier', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> mengubah data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Suplier');
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_suplier->delete($where, 'suplier');
        $this->session->set_flashdata('suplier', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> menghapus data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Suplier');
    }
    function cetak($id)
    {
        $where = array('id' => $id);
        $data['suplier'] = $this->M_suplier->edit_data($where, 'suplier')->result();
        $data['judul'] = 'Data Suplier';
        $data['header'] = 'SUPLIER';
        $this->load->view('v_kartu', $data);
    }
    function print(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'RUKO BU YANI KALIANGKRIK',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'daftar suplier yang bekerja sama',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NAMA',1,0);
        $pdf->Cell(85,6,'TANGGAL SUPLAI',1,0);
        $pdf->Cell(30,6,'ALAMAT',1,0);
        $pdf->Cell(25,6,'NO TELPON',1,1);
        $suplier = $this->db->get('suplier')->result();
        foreach ($suplier as $row){
            $pdf->Cell(20,6,$row->name,1,0);
            $pdf->Cell(85,6,$row->tambah,1,0);
            $pdf->Cell(30,6,$row->alamat,1,0);
            $pdf->Cell(25,6,$row->no_telp,1,1); 
        }
        $pdf->Output();
    }
    function download()
    {
        $data['suplier'] = $this->M_suplier->tampil('suplier');
        $data['judul'] = 'Data Suplier';
        $data['header'] = 'SUPLIER';
        $this->load->view('v_download', $data);
    }
}

?>