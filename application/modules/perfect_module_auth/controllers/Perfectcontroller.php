<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Perfectcontroller extends MX_Controller
{

function __construct() {
parent::__construct();
if (!$this->ion_auth->logged_in()){
                redirect('auth/login');
            }
$this->load->model('Mdl_perfectcontroller');
}

function index() {

}

function get($order_by) {
$query = $this->Mdl_perfectcontroller->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$query = $this->Mdl_perfectcontroller->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$query = $this->Mdl_perfectcontroller->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$query = $this->Mdl_perfectcontroller->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->Mdl_perfectcontroller->_insert($data);
}

function _update($id, $data) {
$this->Mdl_perfectcontroller->_update($id, $data);
}

function _delete($id) {
$this->Mdl_perfectcontroller->_delete($id);
}

function count_where($column, $value) {
$count = $this->Mdl_perfectcontroller->count_where($column, $value);
return $count;
}

function get_max() {
$max_id = $this->Mdl_perfectcontroller->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$query = $this->Mdl_perfectcontroller->_custom_query($mysql_query);
return $query;
}

}