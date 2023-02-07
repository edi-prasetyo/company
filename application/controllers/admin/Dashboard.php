<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('kota_model');
  }
  public function index()
  {
    $count_kota                   = $this->kota_model->get_allkota();
    $list_user                    = $this->user_model->get_all();

    // Chart

    $data = [
      'title'                     => 'Dashboard',
      'list_user'                 => $list_user,
      'count_kota'                => $count_kota,
      'content'                   => 'admin/dashboard/dashboard'
    ];
    $this->load->view('admin/layout/wrapp', $data, FALSE);
  }
}
