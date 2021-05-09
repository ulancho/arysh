<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Header extends CI_Controller
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

	//стр: слайд
	public function all_slide(){
		$data['slide'] = $this->AdminModels->selectAllArray('header_slide');
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/header/all_slide',$data);
		$this->load->view('admin/footer');
	}

	//стр: добавление слайда
	public function add_slide_view(){
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/header/add_slide_view');
		$this->load->view('admin/footer');
	}

	//процесс: добавление слайда
	public function add_slide(){
		$data['name1'] = $this->input->post('name1');
		$data['name2'] = $this->input->post('name2');

		$location = 'header-slide-img';
		$imgname = 'file';
		$ph = $this->do_upload($location, $imgname);

		if (empty($data['name1']) || empty($data['name2'])){
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные!');
			redirect(site_url() . 'admin/Header/add_slider_view');
		}
		else{
			if (isset($ph['upload_data'])) {
				$data['photo'] = $ph['upload_data']['file_name'];
				$add = $this->AdminModels->add_header_slide($data);
				if (!$add) {
					$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
				} else {
					$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
				}
				redirect(site_url() . 'admin/Header/add_slide_view');

			}
		}
	}

	//стр: редактирование слайда
	public function update_slide_view($id){
		$data['slide'] = $this->AdminModels->get_id('header_slide',$id);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/header/update_slide_view',$data);
		$this->load->view('admin/footer');
	}

	//процесс: редактирование слайда
	public function update_slide(){
		$data['id'] = $this->input->post('id');
		$data['name1'] = $this->input->post('name1');
		$data['name2'] = $this->input->post('name2');


		if (!empty($_FILES['file']['name'])){
			$res = $this->delete_file_slide($data['id'],'photo');
			$location = 'header-slide-img';
			$imgname = 'file';
			$ph = $this->do_upload($location, $imgname);

			$data['photo'] = $ph['upload_data']['file_name'];
		}



		$upp = $this->AdminModels->update_slide($data);

		if (!$upp) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}
		redirect(site_url() . 'admin/Header/update_slide_view/'.$data['id']);

	}

	//процесс: удаление слайда
	public function delete_slide($id){
		$this->delete_file_slide($id,'photo');
		$result = $this->AdminModels->delete_row('header_slide',$id);

		if (!$result) {
			$this->session->set_flashdata('flash_message', 'Не удалось удалить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно удалены.');
		}

		redirect(site_url() . 'admin/Header/all_slide/');
	}


	protected function delete_file_slide($id,$field){
		$name =  $this->AdminModels->get_first_name('header_slide',$field,$id);
		$this->AdminModels->delete_files($name[$field],'header-slide-img');
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
