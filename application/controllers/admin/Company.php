<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('company_model');
        $this->load->model('provinsi_model');
        $this->load->model('kota_model');
        $this->load->model('area_model');
    }
    public function index()
    {
        $config['base_url']         = base_url('admin/company/index/');
        $config['total_rows']       = count($this->company_model->total_row());
        $config['per_page']         = 10;
        $config['uri_segment']      = 4;

        //Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        //Limit dan Start
        $limit                      = $config['per_page'];
        $start                      = ($this->uri->segment(4)) ? ($this->uri->segment(4)) : 0;
        //End Limit Start
        $this->pagination->initialize($config);
        $companies = $this->company_model->get_company($limit, $start);
        // var_dump($main_agen);
        // die;

        $data = [
            'title'                 => 'Data company',
            'companies'             => $companies,
            'pagination'            => $this->pagination->create_links(),
            'content'               => 'admin/company/index'
        ];
        $this->load->view('admin/layout/wrapp', $data, FALSE);
    }
    // Create
    public function create()
    {
        $provinsi       = $this->area_model->getProvince();
        // var_dump($provinsi);
        // die;
        $this->form_validation->set_rules(
            'name',
            'Nama',
            'required|is_unique[companies.name]',
            ['required' => 'nama harus di isi']
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[companies.email]',
            [
                'required'     => 'Email Harus diisi',
                'valid_email'   => 'Email Harus Valid',
                'is_unique'    => 'Email Sudah ada, Gunakan Email lain'
            ]
        );


        if ($this->form_validation->run() == false) {
            $data = [
                'title'         => 'Tambah Perusahaan',
                'provinsi'      => $provinsi,
                'content'       => 'admin/company/create'
            ];
            $this->load->view('admin/layout/wrapp', $data, FALSE);
        } else {

            $data = [
                'created_by'   => $this->session->userdata('id'),
                'province_id'    => $this->input->post('province_id'),
                'city_id'   => $this->input->post('city_id'),
                'name'       => $this->input->post('name'),
                'address'    => $this->input->post('address'),
                'telephone'  => $this->input->post('telephone'),
                'whatsapp'  => $this->input->post('whatsapp'),
                'email'  => $this->input->post('email'),
                'website'  => $this->input->post('website'),
                'description'  => $this->input->post('description'),
                'company_field'  => $this->input->post('company_field'),
                'npwp'  => $this->input->post('npwp'),
                'status'  => $this->input->post('status'),
                'send'  => 0,
                'created_at'  => date('Y-m-d H:i:s')
            ];
            $this->company_model->create($data);
            $this->session->set_flashdata('message', 'Selamat Anda berhasil mendaftar, silahkan Aktivasi akun');
            redirect('admin/company');
        }
    }

    // Detail Main Agen
    public function detail($id)
    {
        $company = $this->company_model->detail($id);
        $data = [
            'title'                 => 'Detail Perusahaan',
            'company'             => $company,
            'content'               => 'admin/company/detail'
        ];
        $this->load->view('admin/layout/wrapp', $data, FALSE);
    }

    public function send_success($id)
    {

        $company = $this->company_model->detail($id);
        $data = [
            'id'                      => $company->id,
            'send'                   => 1,
        ];
        $this->company_model->update($data);
        $this->session->set_flashdata('message', 'Data telah di Perbahrui');
        redirect(base_url('admin/company'), 'refresh');
    }
    public function send_failed($id)
    {
        $company = $this->company_model->detail($id);
        $data = [
            'id'                      => $company->id,
            'send'                   => 2,
        ];
        $this->company_model->update($data);
        $this->session->set_flashdata('message', 'Data telah di Perbahrui');
        redirect(base_url('admin/company'), 'refresh');
    }
}
