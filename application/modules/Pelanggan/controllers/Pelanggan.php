<?php
class Pelanggan extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_pelanggan');
        if (($this->session->userdata('status') != 'admin_login') && ($this->session->userdata('status') != 'petugas_login')) {
            redirect('login?alert=belum_login');
        }
    }
    function index(){
        $data['judul'] = "Halaman Pelanggan";
        $data['pelanggan'] = $this->M_pelanggan->get_data('pelanggan')->result();
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_pelanggan', $data);
        $this->load->view('Templates/Footer');
    }
    function tambah(){
        $data['judul'] = "Tambah Data Pelanggan";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_tambah', $data);
        $this->load->view('Templates/Footer');
    }
    function tambah_data()
    {
        $name = $this->input->post('name');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $data = array(
            'name' => $name,
            'jk' => $jk,
            'alamat' => $alamat,
            'no_telp' => $no_telp
        );
        $this->M_pelanggan->insert($data, 'pelanggan');
        $this->session->set_flashdata('pelanggan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> menambahkan data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Pelanggan');
    }
    function edit($id){
        $where = array('id' => $id);
        $data['pelanggan']= $this->M_pelanggan->edit_data($where,'pelanggan')->result();
        $data['judul'] = "Ubah Data Pelanggan";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Templates/Sidebar');
        $this->load->view('Templates/Topbar');
        $this->load->view('V_ubah', $data);
        $this->load->view('Templates/Footer');
    }
    function update(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $jk = $this->input->post('jk');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $where = array('id' => $id);
        if ($password == '') {
            $data = array(
                'name' => $name,
                'jk' => $jk,
                'alamat' => $alamat,
                'no_telp' => $no_telp
            );
            $this->M_pelanggan->update($where, $data, 'pelanggan');
        } else {
            $data = array(
                'name' => $name,
                'jk' => $jk,
                'alamat' => $alamat,
                'no_telp' => $no_telp
            );
            $this->M_pelanggan->update($where, $data, 'pelanggan');
        }
        $this->session->set_flashdata('pelanggan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> mengubah data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Pelanggan');
    }
    function delete($id)
    {
        $where = array('id' => $id);
        $this->M_pelanggan->delete($where, 'pelanggan');
        $this->session->set_flashdata('pelanggan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> menghapus data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ');
        redirect('Pelanggan');
    }
    function cetak($id)
    {
        $where = array('id' => $id);
        $data['pelanggan'] = $this->M_pelanggan->edit_data($where, 'pelanggan')->result();
        $data['judul'] = 'Data Pelanggan';
        $data['header'] = 'PELANGGAN';
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
        $pdf->Cell(190,7,'daftar pelanggan tetap',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->SetFont('Arial','',10);
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NAMA',1,0);
        $pdf->Cell(85,6,'JENIS KELAMIN',1,0);
        $pdf->Cell(30,6,'ALAMAT',1,0);
        $pdf->Cell(25,6,'NO TELPON',1,1);
        $pelanggan = $this->db->get('pelanggan')->result();
        foreach ($suplier as $row){
            $pdf->Cell(20,6,$row->name,1,0);
            $pdf->Cell(85,6,$row->jk,1,0);
            $pdf->Cell(30,6,$row->alamat,1,0);
            $pdf->Cell(25,6,$row->no_telp,1,1); 
        }
        $pdf->Output();
    }
    function download()
    {
        $data['pelanggan'] = $this->M_pelanggan->get_data('pelanggan')->result();
        $data['judul'] = 'Data Pelanggan';
        $data['header'] = 'PELANGGAN';
        $this->load->view('v_download', $data);
    }
}