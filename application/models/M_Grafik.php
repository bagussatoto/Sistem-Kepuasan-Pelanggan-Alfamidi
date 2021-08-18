<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Grafik extends CI_Model{
 
    function getData(){
        
        $all = $this->db->count_all_results('identitas_koresponden'); 

        //menghitung jenis kelamin
        $this->db->where('jenis_kelamin','Perempuan');
        $jkp = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('jenis_kelamin','Laki-laki');
        $jkl = $this->db->count_all_results('identitas_koresponden');


        
        $this->db->where('v1p1','Puas');
        $puas = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Sangat puas');
        $sp = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Netral');
        $netral = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','Tidak puas');
        $tp = $this->db->count_all_results('identitas_koresponden');

        $this->db->where('v1p1','sangat tidak puas');
        $stp = $this->db->count_all_results('identitas_koresponden');

        $data['jk'] = array ($jkp, $jkl);
        $data['jklabel'] = array("perempuan", "Laki-Laki");

        $data['b'] = array($sp, $puas, $netral, $tp, $stp); 
        $data['label'] = array("Sangat Puas", "Puas", "Netral", "Tidak Puas", "Sangat Tidak Puas");

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

        $tinggibatang = $tertinggi + 10;

        $data['a'] = array('all' =>$all, 
                    'puas'=>$puas, 
                    'sangatpuas'=>$sp,
                    'netral'=>$netral,
                    'tp'=>$tp,
                    'stp'=>$stp,
                    'tb' => $tinggibatang
                );
        
        return $data;
    
    }
 
}