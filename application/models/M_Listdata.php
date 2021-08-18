<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Listdata extends CI_Model{

    public function getAll(){
        // return $this->db->get('identitas_koresponden')->result();

        $this->db->select('id, nama, email, jenis_kelamin, usia, pekerjaan');
        $query = $this->db->get('identitas_koresponden');

        return $query->result();
    }

    public function getById($id){
        return $this->db->get_where('identitas_koresponden', ["id"=> $id])->row();
    }

    public function insert(){
        // $data = array(
        //     'title' => 'My title',
        //     'name' => 'My Name',
        //     'date' => 'My date'
        // );

        $data = array(
            'nama' => $this->input->post('namaResponden'),
            'email' => $this->input->post('emailResponden'),
            'jenis_kelamin' => $this->input->post('rbJenkel'),
            'usia' => $this->input->post('rbUsia'),
            'pekerjaan' => $this->input->post('rbPekerjaan'),

            'v1p1' => $this->input->post('rbv1P1'),
            'v1p2' => $this->input->post('rbv1P2'),
            'v1p3' => $this->input->post('rbv1P3'),
            'v1p4' => $this->input->post('rbv1P4'),

            'v2p1' => $this->input->post('rbv2P1'),
            'v2p2' => $this->input->post('rbv2P2'),
            'v2p3' => $this->input->post('rbv2P3'),
            'v2p4' => $this->input->post('rbv2P4'),

            'v3p1' => $this->input->post('rbv3P1'),
            'v3p2' => $this->input->post('rbv3P2'),
            'v3p3' => $this->input->post('rbv3P3'),
            'v3p4' => $this->input->post('rbv3P4'),

            'v4p1' => $this->input->post('rbv4P1'),
            'v4p2' => $this->input->post('rbv4P2'),
            'v4p3' => $this->input->post('rbv4P3'),
            'v4p4' => $this->input->post('rbv4P4'),

            'v5p1' => $this->input->post('rbv5P1'),
            'v5p2' => $this->input->post('rbv5P2'),
            'v5p3' => $this->input->post('rbv5P3'),
            'v5p4' => $this->input->post('rbv5P4')
        );
        $this->db->insert('identitas_koresponden', $data);
    }

    public function hapus($id){
        return $this->db->delete('identitas_koresponden', array("id"=> $id));
    }

    public function update($id){
        $data = array(
            'nama' => $this->input->post('namaResponden'),
            'email' => $this->input->post('emailResponden'),
            'jenis_kelamin' => $this->input->post('rbJenkel'),
            'usia' => $this->input->post('rbUsia'),
            'pekerjaan' => $this->input->post('rbPekerjaan'),

            'v1p1' => $this->input->post('rbv1P1'),
            'v1p2' => $this->input->post('rbv1P2'),
            'v1p3' => $this->input->post('rbv1P3'),
            'v1p4' => $this->input->post('rbv1P4'),

            'v2p1' => $this->input->post('rbv2P1'),
            'v2p2' => $this->input->post('rbv2P2'),
            'v2p3' => $this->input->post('rbv2P3'),
            'v2p4' => $this->input->post('rbv2P4'),

            'v3p1' => $this->input->post('rbv3P1'),
            'v3p2' => $this->input->post('rbv3P2'),
            'v3p3' => $this->input->post('rbv3P3'),
            'v3p4' => $this->input->post('rbv3P4'),

            'v4p1' => $this->input->post('rbv4P1'),
            'v4p2' => $this->input->post('rbv4P2'),
            'v4p3' => $this->input->post('rbv4P3'),
            'v4p4' => $this->input->post('rbv4P4'),

            'v5p1' => $this->input->post('rbv5P1'),
            'v5p2' => $this->input->post('rbv5P2'),
            'v5p3' => $this->input->post('rbv5P3'),
            'v5p4' => $this->input->post('rbv5P4')
        );
        // $this->db->where('id', $id);
        $this->db->update('identitas_koresponden', $data, array('id'=>$id));
    }
}