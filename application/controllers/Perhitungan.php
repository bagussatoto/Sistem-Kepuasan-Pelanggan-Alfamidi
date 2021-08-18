<?php

class Perhitungan extends CI_Controller
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

        $v1bagisp = $data['v1sp']/$data['totaldb'];
        $v1bagipuas = $data['v1puas']/$data['totaldb'];
        $v1baginetral = $data['v1netral']/$data['totaldb'];
        $v1bagitp = $data['v1tp']/$data['totaldb'];
        $v1bagistp = $data['v1stp']/$data['totaldb'];
        $v1bagikali = $v1bagisp * $v1bagipuas * $v1baginetral * $v1bagitp * $v1bagistp;
        
        $data['v1hasilbagi'] = array('sp' => $v1bagisp,
                                    'puas' => $v1bagipuas,
                                    'netral' => $v1baginetral,
                                    'tp' => $v1bagitp,
                                    'stp' => $v1bagistp,
                                    'kali'=> $v1bagikali
                                );

        $v2bagisp = $data['v2sp']/$data['totaldb'];
        $v2bagipuas = $data['v2puas']/$data['totaldb'];
        $v2baginetral = $data['v2netral']/$data['totaldb'];
        $v2bagitp = $data['v2tp']/$data['totaldb'];
        $v2bagistp = $data['v2stp']/$data['totaldb'];
        $v2bagikali = $v2bagisp * $v2bagipuas * $v2baginetral * $v2bagitp * $v2bagistp;
        
        $data['v2hasilbagi'] = array('sp' => $v2bagisp,
                                    'puas' => $v2bagipuas,
                                    'netral' => $v2baginetral,
                                    'tp' => $v2bagitp,
                                    'stp' => $v2bagistp,
                                    'kali'=> $v2bagikali
                                );

        $v3bagisp = $data['v3sp']/$data['totaldb'];
        $v3bagipuas = $data['v3puas']/$data['totaldb'];
        $v3baginetral = $data['v3netral']/$data['totaldb'];
        $v3bagitp = $data['v3tp']/$data['totaldb'];
        $v3bagistp = $data['v3stp']/$data['totaldb'];
        $v3bagikali = $v3bagisp * $v3bagipuas * $v3baginetral * $v3bagitp * $v3bagistp;
    
        $data['v3hasilbagi'] = array('sp' => $v3bagisp,
                                    'puas' => $v3bagipuas,
                                    'netral' => $v3baginetral,
                                    'tp' => $v3bagitp,
                                    'stp' => $v3bagistp,
                                    'kali'=> $v3bagikali
                                );

        $v4bagisp = $data['v4sp']/$data['totaldb'];
        $v4bagipuas = $data['v4puas']/$data['totaldb'];
        $v4baginetral = $data['v4netral']/$data['totaldb'];
        $v4bagitp = $data['v4tp']/$data['totaldb'];
        $v4bagistp = $data['v4stp']/$data['totaldb'];
        $v4bagikali = $v4bagisp * $v4bagipuas * $v4baginetral * $v4bagitp * $v4bagistp;
        
        $data['v4hasilbagi'] = array('sp' => $v4bagisp,
                                    'puas' => $v4bagipuas,
                                    'netral' => $v4baginetral,
                                    'tp' => $v4bagitp,
                                    'stp' => $v4bagistp,
                                    'kali'=> $v4bagikali
                                );

        $v5bagisp = $data['v5sp']/$data['totaldb'];
        $v5bagipuas = $data['v5puas']/$data['totaldb'];
        $v5baginetral = $data['v5netral']/$data['totaldb'];
        $v5bagitp = $data['v5tp']/$data['totaldb'];
        $v5bagistp = $data['v5stp']/$data['totaldb'];
        $v5bagikali = $v5bagisp * $v5bagipuas * $v5baginetral * $v5bagitp * $v5bagistp;
        
        $data['v5hasilbagi'] = array('sp' => $v5bagisp,
                                    'puas' => $v5bagipuas,
                                    'netral' => $v5baginetral,
                                    'tp' => $v5bagitp,
                                    'stp' => $v5bagistp,
                                    'kali'=> $v5bagikali
                                );

        $this->load->view('v_perhitungan',$data);
    }
}
