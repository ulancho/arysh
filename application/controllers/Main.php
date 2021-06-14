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

	//стр: заявка
	public function request(){
		$this->load->view('main/header');
		$this->load->view('main/request');
		$this->load->view('main/footer');
	}

}
