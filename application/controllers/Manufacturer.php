<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Manufacturer extends CI_Controller{

public function __construct()
{
	parent::__construct();
	$this->load->model('manufacturer_model');

}


  public function add_manufacturer()
  {
    $data=array();
  	$data['admin_main_content']=$this->load->view('admin/pages/add_manufacturer_form', '', TRUE);
  	$this->load->view('admin/admin_master', $data);
  }

  function save_manufacturer()
  {
  	$this->manufacturer_model->save_manufacturer();
  	$this->session->set_userdata('message', 'Manufacturer saved successfully');
  	$this->add_manufacturer();
  }


  function manage_manufacturer()
  {
  	$data['manufacturer_info']=$this->manufacturer_model->manage_manufacturer();
  	$data['admin_main_content']=$this->load->view('admin/pages/manage_manufacturer', $data, TRUE);
  	$this->load->view('admin/admin_master', $data);
  }


  function change_manufacturer_status($manufacturer_id, $status)
  {
  	$this->manufacturer_model->change_manufacturer_status($manufacturer_id, $status);
  	
  	redirect('manage-manufacturer');

  }


  function edit_manufacturer($manufacturer_id)
  {
  	$data['manufacturer_data']=$this->manufacturer_model->get_manufacturer_detail($manufacturer_id);
  	$data['admin_main_content']=$this->load->view('admin/pages/edit_manufacturer_form', $data, TRUE);
  	$this->load->view('admin/admin_master', $data);

  }

  function update_manufacturer()
  {
  	$this->manufacturer_model->update_manufacturer();
  	redirect('manage-manufacturer');
  }




















}
