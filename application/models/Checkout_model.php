<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_MOdel {


   function customer_registration()
   {
      $data['customer_name']=$this->input->post('customer_name',true);
      $data['email_address']=$this->input->post('email_address',true);
      $data['password']=md5($this->input->post('password',true));

      $this->db->insert('tbl_customer', $data);
      $customer_id=$this->db->insert_id();

      return $customer_id;

   }

   function select_customer_info_by_id($customer_id)
   {
     $result=$this->db->select('*')->from('tbl_customer')
                           ->where('customer_id', $customer_id)
                           ->get()
                           ->row();
                           return $result;
   }

   function update_billing()
   {
      $data['customer_name']=$this->input->post('customer_name',true);
      $data['email_address']=$this->input->post('email_address',true);
      $data['mobile_number']=$this->input->post('mobile_number',true);
      $data['address']=$this->input->post('address',true);
      $data['city']=$this->input->post('city',true);
      $data['country']=$this->input->post('country',true);
      $data['zip_code']=$this->input->post('zip_code',true);
      
      $shipping_status=$this->input->post('shipping_status',true);

      if($shipping_status=='on')
      {

      $customer_id=$this->input->post('customer_id');
      $this->db->where('customer_id', $customer_id)
               ->update('tbl_customer', $data);

               $data['customer_id']=$customer_id;
               $this->db->insert('tbl_shipping', $data);

               $shipping_id=$this->db->insert_id();

               $sdata=array();
               $sdata['shipping_id']=$shipping_id;
               $this->session->set_userdata($sdata);
      }

      else
      {
         $customer_id=$this->input->post('customer_id');
         $this->db->where('customer_id', $customer_id)
                  ->update('tbl_customer', $data);
      }

   }

   function save_shipping()
   {
      $data=$this->input->post('NULL', true);
      $this->db->insert('tbl_shipping', $data);
   }



}