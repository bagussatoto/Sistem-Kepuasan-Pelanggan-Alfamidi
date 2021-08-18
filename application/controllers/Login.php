<?php

class Login extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        
        if ($this->session->userdata('username')) {
            redirect('home');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            // validasinya success
            $this->_login();
        }
    }

    public function register(){
        $this->load->view('v_register');
    }

    public function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        
        if($user){
            if($password == $user['password']){
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role'],

                ];
                $this->session->set_userdata($data);
                // if ($user['role']  == "admin" || $user['role']  == "perusahaan") {
                //     redirect('home');
                // }else {
                    redirect('home');
                // }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong username and password!</div>');
                redirect('login');
                
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong username and password!</div>');
            redirect('login');
        }    


    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        // $this->session->sess_destroy()

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('login');
    }

}
