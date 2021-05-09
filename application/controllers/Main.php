<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->helper('html');
//		$this->load->model('AdminModels');
//		$this->load->database();
		header('Content-Type: text/html; charset=utf-8');
	}

	//стр:главная
	public function index()
	{
		$this->load->view('main/header');
        $this->load->view('main/index');
     	$this->load->view('main/footer');
	}

	//стр:акции
	public function promotions()
	{
		$this->load->view('main/header');
		$this->load->view('main/promotions');
		$this->load->view('main/footer');
	}

	//стр:акции внутр.
	public function promotion()
	{
		$this->load->view('main/header');
		$this->load->view('main/promotion');
		$this->load->view('main/footer');
	}

	//стр:новости
	public function allNews()
	{
		$this->load->view('main/header');
		$this->load->view('main/allNews');
		$this->load->view('main/footer');
	}

	//стр:новости внутр.
	public function singleNews()
	{
		$this->load->view('main/header');
		$this->load->view('main/singleNews');
		$this->load->view('main/footer');
	}

	//стр:о нас
	public function about()
	{
		$this->load->view('main/header');
		$this->load->view('main/about');
		$this->load->view('main/footer');
	}

	//стр:контакты
	public function contacts()
	{
		$this->load->view('main/header');
		$this->load->view('main/contacts');
		$this->load->view('main/footer');
	}

	//стр:продукты внутр.
	public function singleProduct()
	{
		$this->load->view('main/header');
		$this->load->view('main/singleProduct');
		$this->load->view('main/footer');
	}

	//стр:оплата через эл кошельки
	public function elPay()
	{
		$this->load->view('main/header');
		$this->load->view('main/elPay');
		$this->load->view('main/footer');
	}








	//стр:подкаталог
	public function good_one_in_podcatalog($id_catalog,$id_podcatalog){
		$data['name_catalog'] = $this->AdminModels->get_first_name('catalog', 'name', $id_catalog);
		$name_podcatalog = $this->AdminModels->get_first_name('podcatalog', 'name', $id_podcatalog)['name'];

		$data['name_podcatalog'] = "> $name_podcatalog";

		$data['goods'] = $this->AdminModels->get_goods_in_podcatalog($id_catalog,$id_podcatalog);

		$data['news'] = $this->AdminModels->selectAllArray('news');
		$data['reviews'] = $this->AdminModels->selectAllArray('reviews');
		$data['catalog'] = $this->AdminModels->selectAllArray('catalog');

		$this->load->view('main/header');
		$this->load->view('main/catalog-one', $data);
		$this->load->view('main/footer');
	}

	//процесс: добавление лида
	public function add_request()
	{
		$data['form_name'] = $this->input->post('form_name');
		$data['form_catalog'] = $this->input->post('form_catalog');
		$data['form_number'] = $this->input->post('form_number');

		$datas['error'] = 0;

		if ($data['form_name'] == '' || $data['form_catalog'] == '' || $data['form_number'] == '') {
			$datas['error'] = 1;
		} else {
			$add = $this->AdminModels->add_request($data);
		}


		echo json_encode($datas);

	}

	//процесс: поиск
	public function search()
	{
		if (!empty($this->input->post('s'))) { //Принимаем данные
			$value = trim(strip_tags(stripcslashes(htmlspecialchars($this->input->post('s')))));
			$data['error'] = 0;
			$data['result'] = $this->AdminModels->search_goods($value);
			if(!$data['result']){
                $data['error'] = -1;
            }
		}
		else{
            $data['error'] = 1;
        }
        echo json_encode($data);
	}

}
