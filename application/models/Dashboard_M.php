<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_M extends CI_Model {

    public function data_laporan()
    {   
        $this->db->select('user.*, laporan.*');
        $this->db->from('laporan');
        $this->db->join('user', 'user.id = laporan.id_user');
        $this->db->order_by('laporan.tgl','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function data_galeri()
    {   
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function add($data)
    {
        $this->db->insert('galeri', $data);
    }

    public function edit($where, $data)
    {
        $this->db->where('id', $where);
        $this->db->update('galeri', $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function import_data_laporan($data)
    {
        return $this->db->insert_batch('laporan', $data);
    }

}