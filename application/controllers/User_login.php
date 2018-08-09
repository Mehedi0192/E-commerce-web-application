<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		
	}

	public function index()
	{

	}


	public function user_login_check()
	{
		$user_email=$this->input->post('customer_emaill',true);
		$password=md5($this->input->post('customer_password',true));

		$user_info=$this->User_model->user_detail($user_email,$password);

		if($user_email == $user_info->email_address && $password == $user_info->password)
		{
			redirect('billing');
		}
		else
		{
			redirect('checkout');
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/home');
	}




}