<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 

 class User_model extends CI_Model
 {
 	
 	function __construct()
 	{

 	}

 	function user_detail($user_email)
 	{
 		$result=$this->db->select('*')->from('tbl_customer')
 		                      ->where('email_address', $user_email)
 		                      ->get()
 		                      ->row();

 		                      return $result;
 	}

   



 }