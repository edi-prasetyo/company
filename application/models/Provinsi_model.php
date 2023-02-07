<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //listing Pendaftaran
    public function get_allprovinces()
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $this->db->order_by('id', 'DESC');

        $query = $this->db->get();
        return $query->result();
    }
    public function get_provinces($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $this->db->limit($limit, $start);
        $this->db->order_by('provinces.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function total_row()
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $this->db->order_by('provinces.name', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }


    public function detail_provinces($id)
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function detail($provinces_id)
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $this->db->where('id', $provinces_id);
        $query = $this->db->get();
        return $query->row();
    }
    public function list_kota($provinces_id)
    {
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where('province_id', $provinces_id);
        $this->db->order_by('cities.id', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    // Create
    public function create($data)
    {
        $this->db->insert('provinces', $data);
    }
    // Update
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('provinces', $data);
    }
    //
    //Delete Data
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('provinces', $data);
    }
}
