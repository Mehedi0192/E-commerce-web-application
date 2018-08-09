<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Product extends CI_Controller{

   function __construct()
   {
   	 parent::__construct();
   	 $this->load->model('product_model');
     $this->load->model('manufacturer_model');
   }

  
  
  public function add_product()
  {
  	$data['category_info']=$this->product_model->get_all_active_category();
    $data['manufacturer_info']=$this->product_model->get_all_active_manufacturer();
  	$data['admin_main_content']=$this->load->view('admin/pages/add_product_form', $data, TRUE);
  	$this->load->view('admin/admin_master', $data);
  }

     private function upload_product_image()
   
              {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('product_image'))
                {
                  $data=$this->upload->data();
                  $image_path="uploads/$data[file_name]";
                  return $image_path;
                }
                else {
                  $error=$this->upload->display_errors();
                  //print_r($data);
                }

      }




  function save_product()
  {

    $product_image=$this->upload_product_image();
  	$this->product_model->save_product($product_image);
  	$this->session->set_userdata('message', 'Product saved successfully');
  	$this->add_product();
  }

  function manage_product()
  {
  	$data=array();
  	$data['all_product']=$this->product_model->select_all_product();
  	$data['admin_main_content']=$this->load->view('admin/pages/manage_product', $data, TRUE);
  	$this->load->view('admin/admin_master', $data);
  }

  function change_product_status($product_id, $status)
  {
    $this->product_model->change_product_status($product_id, $status);
    redirect('manage-product');
  }

 function edit_product($product_id)
 {
  $data['category_info']=$this->product_model->get_all_active_category();
    $data['manufacturer_info']=$this->product_model->get_all_active_manufacturer();
    $data['product_info']=$this->product_model->product_info_by_id($product_id);
    $data['admin_main_content']=$this->load->view('admin/pages/edit_product_form', $data, TRUE);
    $this->load->view('admin/admin_master', $data);
 }

 function update_product()
 {
   echo '<pre>';
   print_r($_FILES);

   if($_FILES['product_image']['name']=='' || $_FILES['product_image']['size']=='')
   {

    $product_image=$this->input->post('product_old_image',true);

    $this->product_model->update_product($product_image);

    $data=array();
    $data['message']="Product Updated Successfully!";
    $this->session->set_userdata($data);
    $product_id=$this->input->post('product_id', true);
    redirect('edit-product/'.$product_id);

   }
   else
   {
    $product_image=$this->upload_product_image();
    $this->product_model->update_product($product_image);

    unlink($this->input->post('product_old_image',true));

    $data=array();
    $data['message']="Product Updated Successfully!";
    $this->session->set_userdata($data);
    $product_id=$this->input->post('product_id', true);
    redirect('edit-product/'.$product_id);
   }
 }






}