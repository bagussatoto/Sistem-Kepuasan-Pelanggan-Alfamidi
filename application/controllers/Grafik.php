<?php

class Grafik extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login dulu!</div>');
            redirect('login');
        }
        // if ($this->session->userdata('role')  == "admin" || $this->session->userdata('role')  == "perusahaan") {
        //     redirect('home');
        // }else {
        //     redirect('tambahdata');
        // }
        $this->load->model('m_grafik');
        $this->load->model('m_home');
    }

    public function index(){
        $data = $this->m_grafik->getData();
        $datam = $this->m_home->getData();

        $data_grafik['jk'] = $data['jk'];
        $data_grafik['jklabel'] = $data['jklabel'];
        $data_grafik['label'] = $data['label'];
        $data_grafik['v1'] = array('sp' => $datam['v1sp'],
                                    'puas' => $datam['v1puas'],
                                    'netral' => $datam['v1netral'],
                                    'tp' => $datam['v1tp'],
                                    'stp' => $datam['v1stp'],
                                    'tertinggi' => $this->getMax($datam['v1sp'], $datam['v1puas'], $datam['v1netral'], $datam['v1tp'], $datam['v1stp'])
        );
        
        $data_grafik['v2'] = array('sp' => $datam['v2sp'],
                                    'puas' => $datam['v2puas'],
                                    'netral' => $datam['v2netral'],
                                    'tp' => $datam['v2tp'],
                                    'stp' => $datam['v2stp'],
                                    'tertinggi' => $this->getMax($datam['v2sp'], $datam['v2puas'], $datam['v2netral'], $datam['v2tp'], $datam['v2stp'])
        );

        $data_grafik['v3'] = array('sp' => $datam['v3sp'],
                                    'puas' => $datam['v3puas'],
                                    'netral' => $datam['v3netral'],
                                    'tp' => $datam['v3tp'],
                                    'stp' => $datam['v3stp'],
                                    'tertinggi' => $this->getMax($datam['v3sp'], $datam['v3puas'], $datam['v3netral'], $datam['v3tp'], $datam['v3stp'])
        );

        $data_grafik['v4'] = array('sp' => $datam['v4sp'],
                                    'puas' => $datam['v4puas'],
                                    'netral' => $datam['v4netral'],
                                    'tp' => $datam['v4tp'],
                                    'stp' => $datam['v4stp'],
                                    'tertinggi' => $this->getMax($datam['v4sp'], $datam['v4puas'], $datam['v4netral'], $datam['v4tp'], $datam['v4stp'])
        );

        $data_grafik['v5'] = array('sp' => $datam['v5sp'],
                                    'puas' => $datam['v5puas'],
                                    'netral' => $datam['v5netral'],
                                    'tp' => $datam['v5tp'],
                                    'stp' => $datam['v5stp'],
                                    'tertinggi' => $this->getMax($datam['v5sp'], $datam['v5puas'], $datam['v5netral'], $datam['v5tp'], $datam['v5stp'])
        );



        $this->load->view('v_grafik', $data_grafik);
    }

    private function getMax($sp, $puas, $netral, $tp, $stp){
        $tertinggi = $sp;
        if($puas > $tertinggi){
            $tertinggi = $puas;
        }elseif ($netral>$tertinggi) {
            $tertinggi = $netral;
        }elseif ($tp>$tertinggi) {
            $tertinggi = $tp;
        }elseif ($stp > $tertinggi) {
            $tertinggi = $stp;
        }

        return $tertinggi + 10;
    }
}
