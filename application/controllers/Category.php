<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Category extends CI_Controller{
 
 function __construct()
 {
 	parent::__construct();

 	$this->load->model('category_model');
 }


 //show add category form
 //show category data
 //edit category data
 //update category data
 //delet category data


 public function show_add_category_form()
{
   $data['admin_main_content']=$this->load->view('admin/pages/add_category_form', '', TRUE);
   $this->load->view('admin/admin_master', $data);
}


public function save_category()
{
	$this->category_model->save_category();
	$this->manage_category();

} 

 public function manage_category()
	{ 
		$category_data['manage_category']=$this->category_model->get_all_category();
		$data['admin_main_content']=$this->load->view('admin/pages/manage_category', $category_data, TRUE);
		$this->load->view('admin/admin_master', $data);
		
	}


	function change_category_status($category_id, $status)
	{
		$this->category_model->change_category_status($category_id, $status);
		redirect('manage-category');
	}

	function edit_category($category_id)
	{
		$data['category_data']=$this->category_model->get_category_detail($category_id);
		$data['admin_main_content']=$this->load->view('admin/pages/edit_category_form', $data, TRUE);

		$this->load->view('admin/admin_master', $data);

	}

	function update_category()
	{
		$this->category_model->update_category();
		redirect('manage-category');
	}
		

}