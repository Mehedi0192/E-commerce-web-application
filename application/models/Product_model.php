<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

  

  function select_all_product()
  {
    $result= $this->db->select('*')->from('tbl_product')
                          ->get()
                          ->result();
                          return $result;
  }

   function get_all_active_category()
   {
   	 $result = $this->db->select('*')->from('tbl_category')
   	                               ->where('category_status', 1)
   	                               ->get()->result();

   	                               return $result;
   }


   function get_all_active_manufacturer()
   {
    $result=$this->db->select('*')->from('tbl_manufacturer')
                          ->where('manufacturer_status', 1)
                          ->get()->result();
                          return $result;
   }



   function save_product($product_image)
   {
   	 $product_data=$this->input->post(NULL, TRUE);
   	 //$product_data['product_status']= 1;

     $top_product=$this->input->post('top_product', TRUE);
     if($top_product==NULL)
     {
       $product_data['top_product']=0;
     }
     elseif($top_product=='on')
     {
      $product_data['top_product']=1;
     }
   	 $product_data['product_image']=$product_image;
  
   	 $this->db->insert('tbl_product', $product_data);
   }


   function change_product_status($product_id, $status)
   {
    $data['product_status']=$status;
    $this->db->where('product_id', $product_id)
             ->update('tbl_product', $data);
   }
    
    function product_info_by_id($product_id)
    {
       $result= $this->db->select('*')->from('tbl_product')
                          ->where('product_id', $product_id)
                          ->get()
                          ->row();
                          return $result;

    }

  function update_product($product_image)
  {
    $data=array();
    
    $product_id=$this->input->post('product_id',true);

    $data['category_id']=$this->input->post('category_id',true);
    $data['manufacturer_id']=$this->input->post('manufacturer_id',true);
    $data['product_name']=$this->input->post('product_name',true);
    $data['product_price']=$this->input->post('product_price',true);
    $data['product_short_desc']=$this->input->post('product_short_desc',true);
    $data['product_long_desc']=$this->input->post('product_long_desc',true);
    $data['product_qty']=$this->input->post('product_qty',true);
    $data['product_image']=$product_image;

    $top_product=$this->input->post('top_product',true);
    if($top_product== NULL)
    {
      $data['top_product']=0;
    }
    elseif($top_product=='on')
    {
      $data['top_product']=1;
    }

    $this->db->where('product_id', $product_id)
             ->update('tbl_product', $data);


  }



}