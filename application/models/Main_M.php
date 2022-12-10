<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_M extends CI_Model {

    public function lapor($data)
    {
        $this->db->insert('laporan', $data);
    }

    public function data_galeri_header()
    {   
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where('target', "Header");
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function data_galeri_destinasi()
    {   
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where('target', "Destinasi Pilihan");
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function data_galeri_inspirasi()
    {   
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->where('target', "Inspirasi Perjalanan");
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

}