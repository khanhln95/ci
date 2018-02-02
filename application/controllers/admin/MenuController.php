<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
/**
 * Description of category
 *
 * @author http://roytuts.com
 */
class MenuController extends Admin_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('menu_model', 'cat');
    }
 
    function index() {
        $data['categories'] = $this->cat->category_menu();
        $this->load->view('web/index', $data);
    }
 
}
 
/* End of file category.php */
/* Location: ./application/controllers/category.php */