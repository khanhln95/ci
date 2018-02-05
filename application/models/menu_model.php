<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Menu_model extends CI_Model {
    public $tb_name = 'menu';
    public $id_menu = 'id';
    public $parent_id = 'parent_id';

    function __construct() {
        parent::__construct();
    }
    public function parent_menu(){
        $this->db->select('*');
        $this->db->from($this->tb_name);
        $this->db->where($this->parent_id, 0);

        $parent = $this->db->get()->result();
        $i=0;
        foreach($parent as $p){
            $parent[$i]->sub = $this->sub_menu($p->id);
            $i++;
        }
        return $parent;
    }

    public function sub_menu($id){
        $this->db->select('*');
        $this->db->from($this->tb_name);
        $this->db->where($this->parent_id, $id);

        $child = $this->db->get()->result();
        $i=0;
        foreach($child as $c){
            $child[$i]->sub = $this->sub_menu($c->id);
            $i++;
        }
        return $child;  
    }

}
