<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
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

	//стр: новости
	public function all_news(){

		$data['news'] = $this->AdminModels->selectAllArray('news');

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/news/all_news',$data);
		$this->load->view('admin/footer');
	}

	//стр: добавление новостей
	public function add_news_view(){
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/news/add_news_view');
		$this->load->view('admin/footer');
	}

	//процесс: добавление новостей
	public function add_news(){
		$data['name'] = $this->input->post('name');
		$data['text'] = $this->input->post('texts');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['title_page'] = $this->input->post('title_page');

		$location = 'news-img';
		$imgname = 'file';
		$ph = $this->do_upload($location, $imgname);

		if (empty($data['name']) || empty($data['alt_image'])){
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные!');
			redirect(site_url() . 'admin/News/add_news_view');
		}
		else{
			if (isset($ph['upload_data'])) {
				$data['photo'] = $ph['upload_data']['file_name'];
				$add = $this->AdminModels->add_news($data);
				if (!$add) {
					$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
				} else {
					$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
				}
				redirect(site_url() . 'admin/News/add_news_view');

			}
		}
	}

	//стр: редактирование новостей
	public function update_news_view($id){
		$data['news'] = $this->AdminModels->get_id('news',$id);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/news/update_news_view',$data);
		$this->load->view('admin/footer');
	}

	//процесс: редактирование новостей
	public function update_news(){
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['text'] = $this->input->post('texts');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['title_page'] = $this->input->post('title_page');

		if (!empty($_FILES['file']['name'])){
			$this->delete_file_news($data['id']);

			$location = 'news-img';
			$imgname = 'file';
			$ph = $this->do_upload($location, $imgname);

			$data['photo'] = $ph['upload_data']['file_name'];
		}


		$upp = $this->AdminModels->update_news($data);

		if (!$upp) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}
		redirect(site_url() . 'admin/News/update_news_view/'.$data['id']);
	}

	//процесс: удаление новостей
	public function delete_news($id){
		$this->delete_file_news($id);
		$result = $this->AdminModels->delete_row('news',$id);

		if (!$result) {
			$this->session->set_flashdata('flash_message', 'Не удалось удалить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно удалены.');
		}

		redirect(site_url() . 'admin/News/all_news/');
	}


	// для загрузки фото
	public function do_upload($location, $name)
	{
		$config['upload_path'] = './public/img/' . $location . '/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['max_size'] = 1000;
		$config['max_width'] = 1000;
		$config['max_height'] = 1000;
		$config['encrypt_name'] = TRUE;
		$config['remove_spaces'] = TRUE;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload($name)) {
			return array('error' => $this->upload->display_errors());
		} else {
			return array('upload_data' => $this->upload->data());
		}
	}

	protected function delete_file_news($id){
		$name =  $this->AdminModels->get_first_name('news','photo',$id);
		$this->AdminModels->delete_files($name['photo'],'news-img');
	}


}
