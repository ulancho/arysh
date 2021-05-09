<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller
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

	//стр: отзывы
	public function all_reviews()
	{
		$data['reviews'] = $this->AdminModels->selectAllArray('reviews');

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/reviews/all_reviews',$data);
		$this->load->view('admin/footer');
	}

	//стр: добавление отзывов
	public function add_reviews_view()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/reviews/add_reviews_view');
		$this->load->view('admin/footer');
	}

	//процесс: добавление отзывов
	public function add_reviews()
	{
		$data['name'] = $this->input->post('name');
		$data['texts'] = $this->input->post('texts');
		$data['who'] = $this->input->post('who');


		if (empty($data['name']) || empty($data['texts']) || empty($data['who']) ) {
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные! Заполните все поля');
			redirect(site_url() . 'admin/Reviews/add_reviews_view');
		} else {
			$add = $this->AdminModels->add_reviews($data);
			if (!$add) {
				$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
			} else {
				$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
			}
			redirect(site_url() . 'admin/Reviews/add_reviews_view');

		}
	}

	//стр: редактирование отзывов
	public function update_reviews_view($id)
	{
		$data['reviews'] = $this->AdminModels->get_id('reviews',$id);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/reviews/update_reviews_view',$data);
		$this->load->view('admin/footer');
	}

	//процесс: редактирование отзывов
	public function update_reviews()
	{
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['texts'] = $this->input->post('texts');
		$data['who'] = $this->input->post('who');


		if (empty($data['name']) || empty($data['texts']) || empty($data['who']) ) {
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные! Заполните все поля');
			redirect(site_url() . 'admin/Reviews/update_reviews_view/' . $data['id']);
		} else {
			$add = $this->AdminModels->update_reviews($data);
			if (!$add) {
				$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
			} else {
				$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
			}
			redirect(site_url() . 'admin/Reviews/update_reviews_view/' . $data['id']);

		}
	}

	//процесс: удаление отзывов
	public function delete_reviews($id){
		$result = $this->AdminModels->delete_row('reviews',$id);

		if (!$result) {
			$this->session->set_flashdata('flash_message', 'Не удалось удалить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно удалены.');
		}

		redirect(site_url() . 'admin/Reviews/all_reviews/');
	}


}

