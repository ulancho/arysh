<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends CI_Controller
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

	//стр: каталог
	public function all_catalog()
	{
		$data['catalog'] = $this->AdminModels->selectAllArray('catalog');

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/all_catalog', $data);
		$this->load->view('admin/footer');
	}

	//стр:добавление каталога
	public function add_catalog_view()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/add_catalog_views');
		$this->load->view('admin/footer');
	}

	//процесс: добавление каталога
	public function add_catalog()
	{
		$data['name'] = $this->input->post('name');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['title_page'] = $this->input->post('title_page');

		$location = 'catalog-img';
		$imgname = 'file';
		$ph = $this->do_upload($location, $imgname);

		if (empty($data['name']) || empty($data['alt_image']) || empty($data['title_page'])) {
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные!');
			redirect(site_url() . 'admin/Goods/add_catalog_view');
		} else {
			if (isset($ph['upload_data'])) {
				$data['photo'] = $ph['upload_data']['file_name'];
				$add = $this->AdminModels->add_catalog($data);
				if (!$add) {
					$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
				} else {
					$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
				}
				redirect(site_url() . 'admin/Goods/add_catalog_view');

			}
		}
	}

	//стр: редактирование каталога
	public function update_catalog_view($id)
	{
		$data['catalog'] = $this->AdminModels->get_id('catalog', $id);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/update_catalog_view', $data);
		$this->load->view('admin/footer');
	}

	//процесс: редактрование каталога
	public function update_catalog()
	{
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['title_page'] = $this->input->post('title_page');

		if (!empty($_FILES['file']['name'])) {
			$res = $this->delete_file_catalog($data['id'], 'photo');

			$location = 'catalog-img';
			$imgname = 'file';
			$ph = $this->do_upload($location, $imgname);

			$data['photo'] = $ph['upload_data']['file_name'];

		}


		$upp = $this->AdminModels->update_catalog($data);

		if (!$upp) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}
		redirect(site_url() . 'admin/Goods/update_catalog_view/' . $data['id']);
	}

	//процесс: удаление каталога
	public function delete_catalog($id)
	{
		$photo_catalog = $this->AdminModels->get_first_name('catalog', 'photo', $id);
		$this->AdminModels->delete_files($photo_catalog['photo'], 'catalog-img');

		$goods = $this->AdminModels->get_goods($id);

		foreach ($goods as $row) {
			$this->AdminModels->delete_files($row['photo_1'], 'good-img');
			$this->AdminModels->delete_files($row['photo_2'], 'good-img');
		}

		$catalog = $this->AdminModels->delete_row('catalog', $id);
		$goods = $this->AdminModels->delete_row_2('goods', $id, 'id_catalog');


		if (!$catalog) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}

		redirect(site_url() . 'admin/Goods/all_catalog/');

	}

	//стр:техника
	public function all_good_catalogs($id_catalog)
	{

		$data['id_catalog'] = $id_catalog;
		$data['catalog_name'] = $this->AdminModels->get_first_name('catalog', 'name', $id_catalog);

		$podcatalog = $this->AdminModels->get_first_name('catalog', 'podcatalog', $id_catalog)['podcatalog'];

		if ($podcatalog == 1) {
			$data['podcatalog'] = $this->AdminModels->get_podcatalogs($id_catalog);

			$this->load->view('admin/header');
			$this->load->view('admin/navbar');
			$this->load->view('admin/container');
			$this->load->view('admin/catalog/all_podcatalog', $data);
			$this->load->view('admin/footer');

		} else {
			$data['goods'] = $this->AdminModels->get_goods($id_catalog);
			$data['podcatalog_name'] = '';

			$this->load->view('admin/header');
			$this->load->view('admin/navbar');
			$this->load->view('admin/container');
			$this->load->view('admin/catalog/all_good_catalogs', $data);
			$this->load->view('admin/footer');

		}

	}

	//стр:техника 2
	public function all_good_catalogsss($id_catalog)
	{
		$data['id_catalog'] = $id_catalog;
		$data['catalog_name'] = $this->AdminModels->get_first_name('catalog', 'name', $id_catalog);
		$data['podcatalog_name'] = '';

		$data['goods'] = $this->AdminModels->get_goods($id_catalog);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/all_good_catalogs', $data);
		$this->load->view('admin/footer');


	}

	//стр:добавление техники
	public function add_good_view($id_catalog)
	{
		$data['id_catalog'] = $id_catalog;
		$data['catalog_name'] = $this->AdminModels->get_first_name('catalog', 'name', $id_catalog);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/add_good_views', $data);
		$this->load->view('admin/footer');
	}

	//процесс: добавление техники
	public function add_goods()
	{

		$data['name'] = $this->input->post('name');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['catalog_id'] = $this->input->post('catalog_id');
		$data['podcatalog_id'] = $this->input->post('podcatalog_id');
		$data['desc'] = $this->input->post('desc');
		$link = $this->input->post('link');
		$action = $this->input->post('action');

		$data['characteristic'] = $this->change_table($_POST['characteristic']);

		$data['link'] = $this->change_link_video($link);

		if (empty($data['name']) || empty($data['alt_image'])) {
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные!');
			redirect(site_url() . 'admin/Goods/add_good_view/' . $data['catalog_id']);
		} else {
			$location = 'good-img';

			for ($i = 1; $i <= 2; $i++) {
				$imgname = 'file' . $i;
				$ph[] = $this->do_upload($location, $imgname);
			}


			if (isset($ph[0]['upload_data']) && isset($ph[1]['upload_data'])) {
				$data['photo_1'] = $ph[0]['upload_data']['file_name'];
				$data['photo_2'] = $ph[1]['upload_data']['file_name'];
				$add = $this->AdminModels->add_goods($data);
				if (!$add) {
					$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
				} else {
					$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
				}

				if ($action == 'one_good') {
					redirect(site_url() . 'admin/One_good/add_good_view');
				}
				redirect(site_url() . 'admin/Goods/add_good_view/' . $data['catalog_id']);

			} else {
				$this->session->set_flashdata('flash_message', 'Добавьте фото заново!');
				if ($action == 'one_good') {
					redirect(site_url() . 'admin/One_good/add_good_view');
				}
				redirect(site_url() . 'admin/Goods/add_good_view/' . $data['catalog_id']);
			}
		}
	}

	//стр: редактирование техники
	public function update_good_view($id)
	{
		$data['good'] = $this->AdminModels->get_id('goods', $id);
		$data['catalog'] = $this->AdminModels->selectAllArray('catalog');
		$data['podcatalog'] = $this->AdminModels->get_podcatalogs($data['good']['id_catalog']);
		if (!empty($data['podcatalog'])){
			$data['podcatalog_yes'] = 1;
		}
		else{
			$data['podcatalog_yes'] = 0;
		}


		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/update_good_view', $data);
		$this->load->view('admin/footer');
	}

	//процесс: редактирование техники
	public function update_good()
	{
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['id_podcatalog'] = $this->input->post('id_podcatalog');
		$data['desc'] = $this->input->post('desc');
		$link = $this->input->post('link');
		$data['characteristic'] = $this->change_table($_POST['characteristic']);
		$data['link'] = $this->change_link_video($link);
		$data['id_catalog'] = $this->input->post('id_catalog');


		if (!empty($_FILES['file1']['name'])) {
			$res = $this->delete_file_good($data['id'], 'photo_1');

			$location = 'good-img';
			$imgname = 'file1';
			$ph = $this->do_upload($location, $imgname);

			$data['photo_1'] = $ph['upload_data']['file_name'];

		}

		if (!empty($_FILES['file2']['name'])) {
			$res = $this->delete_file_good($data['id'], 'photo_2');

			$location = 'good-img';
			$imgname = 'file2';
			$ph = $this->do_upload($location, $imgname);

			$data['photo_2'] = $ph['upload_data']['file_name'];

		}

		$upp = $this->AdminModels->update_good($data);

		if (!$upp) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}
		redirect(site_url() . 'admin/Goods/update_good_view/' . $data['id']);

	}

	//процесс: удаление техники
	public function delete_good($catalog_id, $id)
	{
		$this->delete_file_good($id, 'photo_1');
		$this->delete_file_good($id, 'photo_2');
		$result = $this->AdminModels->delete_row('goods', $id);

		if (!$result) {
			$this->session->set_flashdata('flash_message', 'Не удалось удалить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно удалены.');
		}

		redirect(site_url() . 'admin/Goods/all_good_catalogs/' . $catalog_id);
	}

	//стр: добавление подкатегории
	public function add_podcatalog_view($catalog_id)
	{
		$data['catalog_id'] = $catalog_id;
		$data['catalog_name'] = $this->AdminModels->get_first_name('catalog', 'name', $catalog_id)['name'];

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/add_podcatalog_view', $data);
		$this->load->view('admin/footer');
	}

	//процесс: добавление подкатегории
	public function add_podcatalog()
	{
		$data['name'] = $this->input->post('name');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['title_page'] = $this->input->post('title_page');
		$data['catalog_id'] = $this->input->post('catalog_id');


		$location = 'podcatalog-img';
		$imgname = 'file';
		$ph = $this->do_upload($location, $imgname);

		if (empty($data['name']) || empty($data['alt_image']) || empty($data['title_page'])) {
			$this->session->set_flashdata('flash_message', 'Вы ввели пустые данные!');
			redirect(site_url() . 'admin/Goods/add_podcatalog_view/' . $data['catalog_id']);
		} else {
			if (isset($ph['upload_data'])) {
				$data['photo'] = $ph['upload_data']['file_name'];
				$add = $this->AdminModels->add_podcatalog($data);
				if (!$add) {
					$this->session->set_flashdata('flash_message', 'Не удалось добавить данные!');
				} else {
					$this->session->set_flashdata('success_message', 'Данные успешно добавлены.');
					$this->AdminModels->change_catalog($data['catalog_id']);
				}
				redirect(site_url() . 'admin/Goods/add_podcatalog_view/' . $data['catalog_id']);
			}
		}

	}

	//процесс: получение по каталог айди подкатегорий
	public function get_podcatalog()
	{
		$val = $this->input->post('val');

		$add = $this->AdminModels->get_podcatalogs($val);

		echo json_encode($add);
	}

	//стр: добавление техники в подкатегории
	public function all_good_podcatalogs($id_catalog, $id_podcatalog)
	{
		$data['podcatalog_name'] = $this->AdminModels->get_first_name('podcatalog', 'name', $id_podcatalog)['name'];
		$data['catalog_name'] = $this->AdminModels->get_first_name('catalog', 'name', $id_catalog);
		$data['goods'] = $this->AdminModels->get_goods_in_podcatalog($id_catalog, $id_podcatalog);

		$data['id_catalog'] = $id_catalog;

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/all_good_catalogs', $data);
		$this->load->view('admin/footer');
	}

	//стр: редактирование подкатегории
	public function update_podcatalog_view($id)
	{
		$data['catalog_name'] = $this->AdminModels->get_first_name('catalog', 'name', $id)['name'];

		$data['podcatalog'] = $this->AdminModels->get_id('podcatalog', $id);

		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/container');
		$this->load->view('admin/catalog/update_podcatalog_view', $data);
		$this->load->view('admin/footer');
	}

	//процесс:редактирование подкатегории
	public function update_podcatalog()
	{
		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['alt_image'] = $this->input->post('alt_image');
		$data['title_page'] = $this->input->post('title_page');

		if (!empty($_FILES['file']['name'])) {
			$res = $this->delete_file_podcatalog($data['id'], 'photo');
			$location = 'podcatalog-img';
			$imgname = 'file';
			$ph = $this->do_upload($location, $imgname);

			$data['photo'] = $ph['upload_data']['file_name'];
		}


		$upp = $this->AdminModels->update_podcatalog($data);

		if (!$upp) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}
		redirect(site_url() . 'admin/Goods/update_podcatalog_view/' . $data['id']);
	}

	//процесс:удаление подкаталога
	public function delete_podcatalog($id_catalog, $id_podcatalog)
	{
		$photo_catalog = $this->AdminModels->get_first_name('podcatalog', 'photo', $id_podcatalog);
		$this->AdminModels->delete_files($photo_catalog['photo'], 'podcatalog-img');

		$goods = $this->AdminModels->get_goods_in_podcatalog($id_catalog, $id_podcatalog);

		foreach ($goods as $row) {
			$this->AdminModels->delete_files($row['photo_1'], 'good-img');
			$this->AdminModels->delete_files($row['photo_2'], 'good-img');
		}

		$goods = $this->AdminModels->delete_row_2('goods', $id_podcatalog, 'id_podcatalog');
		$goods = $this->AdminModels->delete_row('podcatalog', $id_podcatalog);

		if (!$goods) {
			$this->session->set_flashdata('flash_message', 'Не удалось обновить данные!');
		} else {
			$this->session->set_flashdata('success_message', 'Данные успешно обновлены.');
		}

		redirect(site_url() . 'admin/Goods/all_good_catalogs/' . $id_catalog);
	}

	protected function change_table($tbl)
	{
		$f1 = str_replace('<h1>&nbsp;</h1>', '', $tbl);
		$f2 = str_replace('<br>', '', $f1);
		$f3 = str_replace('<p>&nbsp;</p>', '', $f2);
		return str_replace('<table>', '<table class="table table-bordered">', $f3);
	}

	protected function delete_file_good($id, $field)
	{
		$name = $this->AdminModels->get_first_name('goods', $field, $id);
		$this->AdminModels->delete_files($name[$field], 'good-img');
	}

	protected function delete_file_catalog($id, $field)
	{
		$name = $this->AdminModels->get_first_name('catalog', $field, $id);
		$this->AdminModels->delete_files($name[$field], 'catalog-img');
	}

	protected function delete_file_podcatalog($id, $field)
	{
		$name = $this->AdminModels->get_first_name('podcatalog', $field, $id);
		$this->AdminModels->delete_files($name[$field], 'podcatalog-img');
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

	protected function change_link_video($link)
	{
		return str_replace('watch?v=', 'embed/', $link);
	}

}
