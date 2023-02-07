<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kota_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_allkota()
    {
        $this->db->select('cities.*, provinces.name');
        $this->db->from('cities');
        // join
        $this->db->join('provinces', 'provinces.id = cities.province_id', 'LEFT');
        // End Join
        $this->db->order_by('provinces.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_kota($limit, $start)
    {
        $this->db->select('cities.*, provinces.name');
        $this->db->from('cities');
        // join
        $this->db->join('provinces', 'provinces.id = cities.province_id', 'LEFT');
        // End Join
        $this->db->limit($limit, $start);
        $this->db->order_by('provinces.provinces.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function total_row()
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->order_by('cities.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function detail($kota_id)
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where('id', $kota_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function detail_kota($id)
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function kota_by_provinsi($provinsi_id)
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where(['id', $provinsi_id]);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    // Create
    public function create($data)
    {
        $this->db->insert('cities', $data);
    }
    // Update
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('cities', $data);
    }
    //
    //Delete Data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('cities', $data);
    }
}
