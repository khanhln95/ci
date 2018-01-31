<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class LayoutController extends Public_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('products_model');
	}
	public function index($id=null){
		$this->data['result'] = $this->products_model->getData($id);
		$this->load->view('web/layout', $this->data);
	}
}