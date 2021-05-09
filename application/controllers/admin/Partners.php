<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller
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

    //стр: все партнеры
    public function all_partners()
    {
        $data['partners'] = $this->AdminModels->selectAllArray('partners');

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/container');
        $this->load->view('admin/partners/all_partners', $data);
        $this->load->view('admin/footer');
    }

    //стр: добавление
    public function add_partners_view()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/container');
        $this->load->view('admin/partners/add_partners_view');
        $this->load->view('admin/footer');
    }

    //процесс: добавление
    public function add_partners()
    {
        $data['alt_image'] = $this->input->post('alt_image');
        $data['url'] = $this->input->post('url');

        $location = 'partners-img';
        $imgname = 'file';
        $ph = $this->do_upload($location, $imgname);

        if (isset($ph['upload_data'])) {
            $data['photo'] = $ph['upload_data']['file_name'];
            $add = $this->AdminModels->add_partners($data);
            if (!$add) {
                $this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
            } else {
                $this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
            }
            redirect(site_url() . 'admin/Partners/add_partners_view');

        }
    }

    //стр: редактирование
    public function update_partners_view($id){
        $data['partner'] = $this->AdminModels->get_id('partners',$id);

        $this->load->view('admin/header');
        $this->load->view('admin/navbar');
        $this->load->view('admin/container');
        $this->load->view('admin/partners/update_partners_view',$data);
        $this->load->view('admin/footer');
    }

    //процесс: редактирование
    public function update_partners(){
        $data['alt_image'] = $this->input->post('alt_image');
        $data['url'] = $this->input->post('url');
        $data['id'] = $this->input->post('id');

        if (!empty($_FILES['file']['name'])){
            $res = $this->delete_file_partner($data['id'],'photo');

            $location = 'partners-img';
            $imgname = 'file';
            $ph = $this->do_upload($location, $imgname);

            $data['photo'] = $ph['upload_data']['file_name'];
        }


        $upp = $this->AdminModels->update_partners($data);

        if (!$upp) {
            $this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
        } else {
            $this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
        }
        redirect(site_url() . 'admin/Partners/update_partners_view/'.$data['id']);
    }

    //процесс: удаление
    public function delete_partners($id){
        $photo = $this->AdminModels->get_first_name('partners','photo',$id);
        $this->AdminModels->delete_files($photo['photo'],'partners-img');


        $p = $this->AdminModels->delete_row('partners',$id);


        if (!$p) {
            $this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
        } else {
            $this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
        }

        redirect(site_url() . 'admin/Partners/all_partners/');

    }

    //процесс: удаление фото
    protected function delete_file_partner($id,$field){
        $name =  $this->AdminModels->get_first_name('partners',$field,$id);
        $this->AdminModels->delete_files($name[$field],'partners-img');
    }

    // для загрузки фото
    public function do_upload($location, $name)
    {
        $config['upload_path'] = './public/img/' . $location . '/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($name)) {
            return array('error' => $this->upload->display_errors());
        } else {
            return array('upload_data' => $this->upload->data());
        }
    }

}