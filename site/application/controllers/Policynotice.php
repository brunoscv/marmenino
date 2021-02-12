<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Policynotice extends MY_Controller
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
		//$this->load->view('modulos/policynotice/index');
		//$this->data['listaClientes'] = $this->Clientes_model->getClientes();
	}
}
