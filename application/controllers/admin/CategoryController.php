<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryController extends Admin_Controller {
    function __construct() {
        parent:: __construct();
        $this->load->model('category_model');
    }

    

    public function create() {
        $this->data['button_title'] = 'Thêm';
        if ($this->input->post()) {
        //$model chứa thông tin về sản phảm
            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
            ];
            $this->category_model->create($data);
            redirect('admin/categorycontroller/', 'refresh');
        }
        else {
            $this->data['id_product'] = "";
            // $this -> data['list_group'] = $this->category_model->getData();
            $this->render('admin/category/create');
        }
    }

    //hàm chỉnh sửa thông tin sản phẩm
    public function edit($id = NULL) {
        $this->data['button_title'] = 'Xác nhận';

        if($this->input->post()) {
            $data = [
               'name' => $this->input->post('name'),
               'description' => $this->input->post('description'),
           ];
           $this->category_model->edit($id, $data);               
           redirect('admin/categorycontroller','refresh');
       }
       else {
           $this->data['id_product'] = $id;
           $this->data['items'] = $this->category_model->getSingleData($id);
           $this->render('admin/category/edit');
       }
   }

//ham xoa sản phẩm
   public function delete($id = NULL) {
    $this->category_model->delete($id);
    redirect('admin/categorycontroller','refresh');
}

public function index() {
    $this -> data['data'] = $this->category_model->getData();
    $this -> render('admin/category/list');
}
}
?>