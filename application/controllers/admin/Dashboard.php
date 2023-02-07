<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->model('kota_model');
    $this->load->model('company_model');
  }
  public function index()
  {
    $company                   = $this->company_model->get_allcompany();
    $send_success                  = $this->company_model->send_success();
    $send_failed                  = $this->company_model->send_failed();
    $list_user                    = $this->user_model->get_all();

    // Chart

    $data = [
      'title'                     => 'Dashboard',
      'list_user'                 => $list_user,
      'company'                => $company,
      'send_success'    => $send_success,
      'send_failed'   => $send_failed,
      'content'                   => 'admin/dashboard/dashboard'
    ];
    $this->load->view('admin/layout/wrapp', $data, FALSE);
  }
}
