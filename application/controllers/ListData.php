<?php

class ListData extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login dulu!</div>');
            redirect('login');
        }
        $this->load->model('m_listdata');
        
    }

    public function index(){
        $data["responden"] = $this->m_listdata->getAll();
        $this->load->view('v_listdata', $data);
    }
}