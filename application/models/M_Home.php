<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Home extends CI_Model{

    public function getData(){
        // total data di database
        $data['totaldb'] = $this->db->count_all_results('identitas_koresponden'); 

        //menghitung jenis kelamin
        $this->db->where('jenis_kelamin','Perempuan');
        $data['jkp'] = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('jenis_kelamin','Laki-laki');
        $data['jkl'] = $this->db->count_all_results('identitas_koresponden');

        //menghitung usia
        $this->db->where('usia','<17 tahun');
        $data['usia<17'] = $this->db->count_all_results('identitas_koresponden');
        
        $this->db->where('usia','17-20tahun');
        $data['usia1720'] = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('usia','21-25tahun');
        $data['usia2125'] = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('usia','>25tahun');
        $data['usia>25'] = $this->db->count_all_results('identitas_koresponden');

        //pekerjaan
        $this->db->where('pekerjaan','karyawan swasta');
        $data['kerjaks'] = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('pekerjaan','wiraswasta');
        $data['kerjaws'] = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('pekerjaan','pelajar/mahasiswa');
        $data['kerjamhs'] = $this->db->count_all_results('identitas_koresponden');

        $data['kerjaoter'] = $data['totaldb'] - $data['kerjaks'] - $data['kerjaws'] - $data['kerjamhs'];

        //variable 1 pertanyaan 1
        $this->db->where('v1p1','Puas');
        $puasv1p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Tidak Puas');
        $tidakpuasv1p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Sangat puas');
        $spv1p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Netral');
        $netralv1p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Sangat tidak Puas');
        $stpv1p1 = $this->db->count_all_results('identitas_koresponden');

        //variable 1 pertanyaan 2
        $this->db->where('v1p2','Puas');
        $puasv1p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p2','Tidak Puas');
        $tidakpuasv1p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p2','Sangat puas');
        $spv1p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p2','Netral');
        $netralv1p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p2','Sangat tidak Puas');
        $stpv1p2 = $this->db->count_all_results('identitas_koresponden');

        //variable 1 pertanyaan 3
        $this->db->where('v1p3','Puas');
        $puasv1p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p3','Tidak Puas');
        $tidakpuasv1p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p3','Sangat puas');
        $spv1p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p3','Netral');
        $netralv1p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p3','Sangat tidak Puas');
        $stpv1p3 = $this->db->count_all_results('identitas_koresponden');

        //variable 1 pertanyaan 4
        $this->db->where('v1p4','Puas');
        $puasv1p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p4','Tidak Puas');
        $tidakpuasv1p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p4','Sangat puas');
        $spv1p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p4','Netral');
        $netralv1p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p4','Sangat tidak Puas');
        $stpv1p4 = $this->db->count_all_results('identitas_koresponden');

        //variable 1
        $totalv1puas = $puasv1p1 + $puasv1p2 + $puasv1p3 + $puasv1p4;
        $totalv1tp = $tidakpuasv1p1 + $tidakpuasv1p2 + $tidakpuasv1p3 + $tidakpuasv1p4;

        $data['v1'] = array($puasv1p1, $puasv1p2, $puasv1p3, $puasv1p4);
        
        $data['v1puas'] = $totalv1puas;
        $data['v1tp'] = $totalv1tp;

        $totalv1sp = $spv1p1 + $spv1p2 + $spv1p3 + $spv1p4; 
        $totalv1netral = $netralv1p1 + $netralv1p2 + $netralv1p3 + $netralv1p4; 
        $totalv1stp = $stpv1p1 + $stpv1p2 + $stpv1p3 + $stpv1p4; 
        
        $data['v1sp'] = $totalv1sp;
        $data['v1netral'] = $totalv1netral;
        $data['v1stp'] = $totalv1stp;

        $data['v1spdetail'] = array($spv1p1, $spv1p2, $spv1p3, $spv1p4);
        $data['v1puasdetail'] = array($puasv1p1, $puasv1p2, $puasv1p3, $puasv1p4);
        $data['v1netraldetail'] = array($netralv1p1, $netralv1p2, $netralv1p3, $netralv1p4);
        $data['v1tpdetail'] = array($tidakpuasv1p1, $tidakpuasv1p2, $tidakpuasv1p3, $tidakpuasv1p4);
        $data['v1stpdetail'] = array($stpv1p1, $stpv1p2, $stpv1p3, $stpv1p4);

         

        //variable 2 pertanyaan 1
        $this->db->where('v2p1','Puas');
        $puasv2p1 = $this->db->count_all_results('identitas_koresponden');
        
        $this->db->where('v2p1','Tidak Puas');
        $tidakpuasv2p1 = $this->db->count_all_results('identitas_koresponden');
        
        $this->db->where('v2p1','Sangat puas');
        $spv2p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p1','Netral');
        $netralv2p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p1','Sangat tidak Puas');
        $stpv2p1 = $this->db->count_all_results('identitas_koresponden');
        
        //variable 2 pertanyaan 2
        $this->db->where('v2p2','Puas');
        $puasv2p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p2','Tidak Puas');
        $tidakpuasv2p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p2','Sangat puas');
        $spv2p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p2','Netral');
        $netralv2p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p2','Sangat tidak Puas');
        $stpv2p2 = $this->db->count_all_results('identitas_koresponden');

        //variable 2 pertanyaan 3
        $this->db->where('v2p3','Puas');
        $puasv2p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p3','Tidak Puas');
        $tidakpuasv2p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p3','Sangat puas');
        $spv2p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p3','Netral');
        $netralv2p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p3','Sangat tidak Puas');
        $stpv2p3 = $this->db->count_all_results('identitas_koresponden');

        //variable 2 pertanyaan 4
        $this->db->where('v2p4','Puas');
        $puasv2p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p4','Tidak Puas');
        $tidakpuasv2p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p4','Sangat puas');
        $spv2p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p4','Netral');
        $netralv2p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v2p4','Sangat tidak Puas');
        $stpv2p4 = $this->db->count_all_results('identitas_koresponden');

        //variable 2
        $totalv2puas = $puasv2p1 + $puasv2p2 + $puasv2p3 + $puasv2p4;
        $totalv2tp = $tidakpuasv2p1 + $tidakpuasv2p2 + $tidakpuasv2p3 + $tidakpuasv2p4;

        $data['v2puas'] = $totalv2puas;
        $data['v2tp'] = $totalv2tp;

        $totalv2sp = $spv2p1 + $spv2p2 + $spv2p3 + $spv2p4; 
        $totalv2netral = $netralv2p1 + $netralv2p2 + $netralv2p3 + $netralv2p4; 
        $totalv2stp = $stpv2p1 + $stpv2p2 + $stpv2p3 + $stpv2p4; 
        
        $data['v2sp'] = $totalv2sp;
        $data['v2netral'] = $totalv2netral;
        $data['v2stp'] = $totalv2stp;

        $data['v2spdetail'] = array($spv2p1, $spv2p2, $spv2p3, $spv2p4);
        $data['v2puasdetail'] = array($puasv2p1, $puasv2p2, $puasv2p3, $puasv2p4);
        $data['v2netraldetail'] = array($netralv2p1, $netralv2p2, $netralv2p3, $netralv2p4);
        $data['v2tpdetail'] = array($tidakpuasv2p1, $tidakpuasv2p2, $tidakpuasv2p3, $tidakpuasv2p4);
        $data['v2stpdetail'] = array($stpv2p1, $stpv2p2, $stpv2p3, $stpv2p4);


        //variable 3 pertanyaan 1
        $this->db->where('v3p1','Puas');
        $puasv3p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p1','Tidak Puas');
        $tidakpuasv3p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p1','Sangat puas');
        $spv3p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p1','Netral');
        $netralv3p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p1','Sangat tidak Puas');
        $stpv3p1 = $this->db->count_all_results('identitas_koresponden');

        //variable 3 pertanyaan 2
        $this->db->where('v3p2','Puas');
        $puasv3p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p2','Tidak Puas');
        $tidakpuasv3p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p2','Sangat puas');
        $spv3p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p2','Netral');
        $netralv3p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p2','Sangat tidak Puas');
        $stpv3p2 = $this->db->count_all_results('identitas_koresponden');

        //variable 3 pertanyaan 3
        $this->db->where('v3p3','Puas');
        $puasv3p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p3','Tidak Puas');
        $tidakpuasv3p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p3','Sangat puas');
        $spv3p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p3','Netral');
        $netralv3p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p3','Sangat tidak Puas');
        $stpv3p3 = $this->db->count_all_results('identitas_koresponden');

        //variable 3 pertanyaan 4
        $this->db->where('v3p4','Puas');
        $puasv3p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p4','Tidak Puas');
        $tidakpuasv3p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p4','Sangat puas');
        $spv3p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p4','Netral');
        $netralv3p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v3p4','Sangat tidak Puas');
        $stpv3p4 = $this->db->count_all_results('identitas_koresponden');

        //variable 3
        $totalv3puas = $puasv3p1 + $puasv3p2 + $puasv3p3 + $puasv3p4;
        $totalv3tp = $tidakpuasv3p1 + $tidakpuasv3p2 + $tidakpuasv3p3 + $tidakpuasv3p4;

        $data['v3puas'] = $totalv3puas;
        $data['v3tp'] = $totalv3tp;

        $totalv3sp = $spv3p1 + $spv3p2 + $spv3p3 + $spv3p4; 
        $totalv3netral = $netralv3p1 + $netralv3p2 + $netralv3p3 + $netralv3p4; 
        $totalv3stp = $stpv3p1 + $stpv3p2 + $stpv3p3 + $stpv3p4; 
        
        $data['v3sp'] = $totalv3sp;
        $data['v3netral'] = $totalv3netral;
        $data['v3stp'] = $totalv3stp;

        $data['v3spdetail'] = array($spv3p1, $spv3p2, $spv3p3, $spv3p4);
        $data['v3puasdetail'] = array($puasv3p1, $puasv3p2, $puasv3p3, $puasv3p4);
        $data['v3netraldetail'] = array($netralv3p1, $netralv3p2, $netralv3p3, $netralv3p4);
        $data['v3tpdetail'] = array($tidakpuasv3p1, $tidakpuasv3p2, $tidakpuasv3p3, $tidakpuasv3p4);
        $data['v3stpdetail'] = array($stpv3p1, $stpv3p2, $stpv3p3, $stpv3p4);

        //variable 4 pertanyaan 1
        $this->db->where('v4p1','Puas');
        $puasv4p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p1','Tidak Puas');
        $tidakpuasv4p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p1','Sangat puas');
        $spv4p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p1','Netral');
        $netralv4p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p1','Sangat tidak Puas');
        $stpv4p1 = $this->db->count_all_results('identitas_koresponden');

        //variable 4 pertanyaan 2
        $this->db->where('v4p2','Puas');
        $puasv4p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p2','Tidak Puas');
        $tidakpuasv4p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p2','Sangat puas');
        $spv4p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p2','Netral');
        $netralv4p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p2','Sangat tidak Puas');
        $stpv4p2 = $this->db->count_all_results('identitas_koresponden');

        //variable 4 pertanyaan 3
        $this->db->where('v4p3','Puas');
        $puasv4p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p3','Tidak Puas');
        $tidakpuasv4p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p3','Sangat puas');
        $spv4p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p3','Netral');
        $netralv4p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p3','Sangat tidak Puas');
        $stpv4p3 = $this->db->count_all_results('identitas_koresponden');

        //variable 4 pertanyaan 4
        $this->db->where('v4p4','Puas');
        $puasv4p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p4','Tidak Puas');
        $tidakpuasv4p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p4','Sangat puas');
        $spv4p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p4','Netral');
        $netralv4p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v4p4','Sangat tidak Puas');
        $stpv4p4 = $this->db->count_all_results('identitas_koresponden');

        //variable 4
        $totalv4puas = $puasv4p1 + $puasv4p2 + $puasv4p3 + $puasv4p4;
        $totalv4tp = $tidakpuasv4p1 + $tidakpuasv4p2 + $tidakpuasv4p3 + $tidakpuasv4p4;

        $data['v4puas'] = $totalv4puas;
        $data['v4tp'] = $totalv4tp;

        $totalv4sp = $spv4p1 + $spv4p2 + $spv4p3 + $spv4p4; 
        $totalv4netral = $netralv4p1 + $netralv4p2 + $netralv4p3 + $netralv4p4; 
        $totalv4stp = $stpv4p1 + $stpv4p2 + $stpv4p3 + $stpv4p4; 
        
        $data['v4sp'] = $totalv4sp;
        $data['v4netral'] = $totalv4netral;
        $data['v4stp'] = $totalv4stp;

        $data['v4spdetail'] = array($spv4p1, $spv4p2, $spv4p3, $spv4p4);
        $data['v4puasdetail'] = array($puasv4p1, $puasv4p2, $puasv4p3, $puasv4p4);
        $data['v4netraldetail'] = array($netralv4p1, $netralv4p2, $netralv4p3, $netralv4p4);
        $data['v4tpdetail'] = array($tidakpuasv4p1, $tidakpuasv4p2, $tidakpuasv4p3, $tidakpuasv4p4);
        $data['v4stpdetail'] = array($stpv4p1, $stpv4p2, $stpv4p3, $stpv4p4);

        //variable 5 pertanyaan 1
        $this->db->where('v5p1','Puas');
        $puasv5p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p1','Tidak Puas');
        $tidakpuasv5p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p1','Sangat puas');
        $spv5p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p1','Netral');
        $netralv5p1 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p1','Sangat tidak Puas');
        $stpv5p1 = $this->db->count_all_results('identitas_koresponden');

        //variable 5 pertanyaan 2
        $this->db->where('v5p2','Puas');
        $puasv5p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p2','Tidak Puas');
        $tidakpuasv5p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p2','Sangat puas');
        $spv5p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p2','Netral');
        $netralv5p2 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p2','Sangat tidak Puas');
        $stpv5p2 = $this->db->count_all_results('identitas_koresponden');

        //variable 5 pertanyaan 3
        $this->db->where('v5p3','Puas');
        $puasv5p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p3','Tidak Puas');
        $tidakpuasv5p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p3','Sangat puas');
        $spv5p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p3','Netral');
        $netralv5p3 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p3','Sangat tidak Puas');
        $stpv5p3 = $this->db->count_all_results('identitas_koresponden');

        //variable 5 pertanyaan 4
        $this->db->where('v5p4','Puas');
        $puasv5p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p4','Tidak Puas');
        $tidakpuasv5p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p4','Sangat puas');
        $spv5p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p4','Netral');
        $netralv5p4 = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v5p4','Sangat tidak Puas');
        $stpv5p4 = $this->db->count_all_results('identitas_koresponden');

        //variable 5
        $totalv5puas = $puasv5p1 + $puasv5p2 + $puasv5p3 + $puasv5p4;
        $totalv5tp = $tidakpuasv5p1 + $tidakpuasv5p2 + $tidakpuasv5p3 + $tidakpuasv5p4;

        $data['v5puas'] = $totalv5puas;
        $data['v5tp'] = $totalv5tp;

        $totalv5sp = $spv5p1 + $spv5p2 + $spv5p3 + $spv5p4; 
        $totalv5netral = $netralv5p1 + $netralv5p2 + $netralv5p3 + $netralv5p4; 
        $totalv5stp = $stpv5p1 + $stpv5p2 + $stpv5p3 + $stpv5p4; 
        
        $data['v5sp'] = $totalv5sp;
        $data['v5netral'] = $totalv5netral;
        $data['v5stp'] = $totalv5stp;

        $data['v5spdetail'] = array($spv5p1, $spv5p2, $spv5p3, $spv5p4);
        $data['v5puasdetail'] = array($puasv5p1, $puasv5p2, $puasv5p3, $puasv5p4);
        $data['v5netraldetail'] = array($netralv5p1, $netralv5p2, $netralv5p3, $netralv5p4);
        $data['v5tpdetail'] = array($tidakpuasv5p1, $tidakpuasv5p2, $tidakpuasv5p3, $tidakpuasv5p4);
        $data['v5stpdetail'] = array($stpv5p1, $stpv5p2, $stpv5p3, $stpv5p4);

        return $data;

    } 

}