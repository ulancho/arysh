<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class One_good extends CI_Controller
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

    //стр:добавление техники
    public function add_good_view(){
        $data['catalog'] = $this->AdminModels->selectAllArray('catalog');

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/container');
        $this->load->view('admin/one_good/add_good_view',$data);
        $this->load->view('admin/footer');
    }

}