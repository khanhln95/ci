<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class LayoutController extends Public_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('products_model');
		$this->load->model('menu_model');
	}
	public function index($id=null){
		$this->data['product'] = $this->products_model->getData($id);
		$this->data['menu'] = $this->menu_model->parent_menu();
		$this->load->view('web/index', $this->data);
		// debug_print_backtrace();
	}
}