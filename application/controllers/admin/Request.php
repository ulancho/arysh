<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModels');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        $arraydata = $this->session->userdata['login'];
        if (empty($arraydata)) {
            redirect(site_url() . 'admin/Admin_page/');
        }
    }

    //стр: лидов
    public function all_request()
    {
        $data['request'] = $this->AdminModels->selectAllArray('reguest');

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/container');
        $this->load->view('admin/request/all_request', $data);
        $this->load->view('admin/footer');
    }

}