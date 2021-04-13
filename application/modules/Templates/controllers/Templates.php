<?php
class Templates extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }
    function log(){
        $data['log'] = $this->M_login->get_data();
        $this->load->view('Topbar', $data);
        $this->load->view('Footer', $data);
    }
}
