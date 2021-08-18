<?php

class Alfamidi extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login dulu!</div>');
            redirect('login');
        }
    }

    public function index(){
        $data['sesi'] = $this->session->userdata('username');
        $this->load->view('v_alfamidi');
    }
}
