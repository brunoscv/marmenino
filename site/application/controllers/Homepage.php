<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		//$this->_auth();

		//$this->load->model("Clientes_model");
	}

	public function index()
	{
		$this->load->view('site/header');
		$this->load->view('site/footer');
		//$this->data['listaClientes'] = $this->Clientes_model->getClientes();
	}
}
