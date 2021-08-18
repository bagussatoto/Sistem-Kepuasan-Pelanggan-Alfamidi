<?php

class TambahData extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login dulu!</div>');
            redirect('login');
        }
        $this->load->model('m_listdata');
        $this->load->library('form_validation');
        
    }

    public function index(){
        $this->load->view('v_tambahdata');
    }

    public function tambah(){
        $dataRes = $this->m_listdata;
        $dataRes->insert();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Save data success</div>');
        $this->load->view('v_tambahdata');
        
    }

    public function hapus($id=null){
        if(!isset($id))show_404();
        
        if($this->m_listdata->hapus($id)){
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete data success</div>');
            redirect(site_url('listdata'));
            
        }
    }

    public function editData($id = null){
        if(!isset($id)){
            redirect('listdata');
        }

        $dataRes = $this->m_listdata;

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if($this->form_validation->run()){
            $dataRes->update($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah data success</div>');
        }

        
        $data["responden"] = $dataRes->getById($id);
        if(!$data["responden"]) show_404();
        
        $this->load->view('v_editdata',$data);
        
    }

    public function editDataSimpan($id = null){
        if(!isset($id)){
            redirect('listdata');
        }

        $dataRes = $this->m_listdata;

        $dataRes->update($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Ubah data success</div>');
        
        $data["responden"] = $dataRes->getById($id);
        if(!$data["responden"]) show_404();
        
        $this->editData($id);
        
    }

    
}
