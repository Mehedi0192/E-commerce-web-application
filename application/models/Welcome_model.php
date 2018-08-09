<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_MOdel {
   

   function all_active_product()
   {
   	$result=$this->db->select('*')->from('tbl_product')
   	                      ->where('product_status', 1)
                            ->limit(12)
   	                      ->get()
   	                      ->result();
   	                      return $result;
   }

   function select_product_by_id($product_id)
   {
   	   	$result=$this->db->select('*')->from('tbl_product')
   	   	                  ->join('tbl_manufacturer', 'tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
                            ->where('product_id', $product_id)
   	                      ->get()
   	                      ->row();
   	                      return $result;

      }

      function select_category_page_by_id($category_id)
      {
         $result=$this->db->select('*')->from('tbl_product')
                                       ->join('tbl_category', 'tbl_category.category_id=tbl_product.category_id')
                                       ->where('tbl_product.category_id',  $category_id)
                                       ->limit(12)
                                       ->get()
                                       ->result();
                               return $result;
      }


      function select_brand_product_by_id($manufacturer_id)
      {
         $result=$this->db->select('*')->from('tbl_product')
                                       ->join('tbl_manufacturer', 'tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
                                       ->where('tbl_product.manufacturer_id', $manufacturer_id)
                                       ->limit(12)
                                       ->get()
                                       ->result();
                                       return $result;
      }


     public function sw_search($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_status', 1);
        $this->db->like('product_name', $keyword,'after');
        //$this->db->or_like('product_name', $keyword,'after');
        $this->db->order_by("product_name", "asc");
 
        $query = $this->db->get();
        foreach($query->result_array() as $row){
            //$data[$row['product_name']];
            $data[] = $row;
        }
        //return $data;
        return $query;
    }


    function search_product_by_name()
    {
      $product_name=$this->input->post('product_name',true);

      $result=$this->db->select('*')->from('tbl_product')
                                    ->join('tbl_manufacturer', 'tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
                            ->where('product_name', $product_name)
                            ->get()
                            ->row();

                            return $result;
    }


}