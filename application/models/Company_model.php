<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company_model extends CI_Model
{
    //load database
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_company($limit, $start,)
    {
        $this->db->select('companies.*, user.name as user_name');
        $this->db->from('companies');
        $this->db->join('user', 'user.id = companies.created_by', 'LEFT');
        $this->db->order_by('companies.id', 'DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }
    //Total Row
    public function total_row()
    {

        $this->db->select('*');
        $this->db->from('companies');
        $query = $this->db->get();
        return $query->result();
    }
    public function create($data)
    {
        $this->db->insert('companies', $data);
    }
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('companies');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('companies', $data);
    }
}
