<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer_model extends CI_Model{


function save_manufacturer()
{
	$manufacturer_data=$this->input->post(NULL, TRUE);
	$manufacturer_data['manufacturer_status']= 1;
	$this->db->insert('tbl_manufacturer', $manufacturer_data);
}

function manage_manufacturer()
{
	$result=$this->db->select('*')->from('tbl_manufacturer')
	                              ->get()->result();
	                              
	                              return $result;
}

function change_manufacturer_status($manufacturer_id, $status)
{   
	$data['manufacturer_status']= $status;

	         $this->db->where('manufacturer_id', $manufacturer_id);
	         $this->db->update('tbl_manufacturer', $data);
}


function get_manufacturer_detail($manufacturer_id)
{
	$result=$this->db->select('*')->from('tbl_manufacturer')
	                      ->where('manufacturer_id', $manufacturer_id)
	                      ->get()
	                      ->row();
	                      return $result;

}

function update_manufacturer()
  { 
  	$data=$this->input->post(NULL, TRUE);
  	$manufacturer_id=$data['manufacturer_id'];
  	unset($data['manufacturer_id']);
  	$this->db->where('manufacturer_id', $manufacturer_id)
  	         ->update('tbl_manufacturer', $data);
  	         
  }

  









}