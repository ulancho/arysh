<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
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

	//стр: список контактов
	public function all_contacts()
	{
     	$data['contact'] = $this->AdminModels->selectAllArray('contact');

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/contact/all_contact',$data);
		$this->load->view('admin/footer');
	}

	//Стр: добавление контактов
	public function add_contacts_view(){
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/contact/add_contacts_view');
		$this->load->view('admin/footer');
	}

	//Процесс: добавление контактов
	public function add_conatacts(){
		$data['status'] = $this->input->post('status');
		$data['num'] = $this->input->post('num');

		if (empty($data['status']) || empty($data['num'])) {
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные!');
			redirect(site_url() . 'admin/Contact/add_contacts_view');
		} else {
			$add = $this->AdminModels->add_contact($data);
			if (!$add) {
				$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
			} else {
				$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
			}
			redirect(site_url() . 'admin/Contact/add_contacts_view');
		}
	}

	//Стр: редактирование контактов
	public function upd_contact_view($id){
		$data['contact'] = $this->AdminModels->get_id('contact', $id);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/contact/upd_contact_view',$data);
		$this->load->view('admin/footer');
	}

	//Процесс: редактирование контактов
	public function update_conatacts(){
		$data['id'] = $this->input->post('id');
		$data['status'] = $this->input->post('status');
		$data['num'] = $this->input->post('num');


		$upp = $this->AdminModels->update_contact($data);

		if (!$upp) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}
		redirect(site_url() . 'admin/Contact/upd_contact_view/' . $data['id']);
	}

	//Процесс: удаление контактов
	public function delete_contacts($id){
		$result = $this->AdminModels->delete_row('contact',$id);

		if (!$result) {
			$this->session->set_flashdata('flash_message', 'Не удалось удалить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно удалены.');
		}

		redirect(site_url() . 'admin/Contact/all_contacts');
	}

}
