<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{

function __construct() {
parent::__construct();
if (!$this->ion_auth->logged_in()){
                redirect('auth/login');
            }
$this->load->model('Mdl_dashboard');
}

function index() {
echo 'This is a test to show that you have to be logged in for it to be shown';
}

function get($order_by) {
$query = $this->Mdl_dashboard->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$query = $this->Mdl_dashboard->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$query = $this->Mdl_dashboard->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$query = $this->Mdl_dashboard->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->Mdl_dashboard->_insert($data);
}

function _update($id, $data) {
$this->Mdl_dashboard->_update($id, $data);
}

function _delete($id) {
$this->Mdl_dashboard->_delete($id);
}

function count_where($column, $value) {
$count = $this->Mdl_dashboard->count_where($column, $value);
return $count;
}

function get_max() {
$max_id = $this->Mdl_dashboard->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$query = $this->Mdl_dashboard->_custom_query($mysql_query);
return $query;
}

}