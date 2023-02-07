<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Area_model extends CI_Model
{

    // Get cities
    function getProvince()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $this->db->order_by('name', 'ASC');
        $q = $this->db->get('provinces');

        $response = $q->result_array();

        return $response;
    }
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('provinces');
        $this->db->where(['id', $id]);
        $query = $this->db->get();
        return $query->row();
    }

    // Get City departments
    function getCity($postData)
    {
        $response = array();

        // Select record
        $this->db->select('id,cities.name');
        $this->db->where('province_id', $postData['province']);
        $this->db->order_by('cities.name', 'ASC');
        $q = $this->db->get('cities');
        $response = $q->result_array();

        return $response;
    }
}
