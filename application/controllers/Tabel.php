<?php

class Tabel extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login dulu!</div>');
            redirect('login');
        }
        $this->load->model('m_home');
    }

    public function index(){
        $data = $this->m_home->getData();
        $this->load->view('v_tabel',$data);
    }
}
