<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {
	
 function __construct()
 {
 	parent::__construct();
    $this->load->model('admin_model');

 }


	public function index()
	{
		if(isset($this->session->user_id))
		{
			redirect('admin-dashboard');
		}

		else
		{
          $this->load->view('admin/admin_login');
	    }
	
	}

	public function admin_login_check()
	{

        
		$user_email=$this->input->post('user_email', TRUE);
        $user_password=$this->input->post('user_password', TRUE);

        $this->load->model('admin_model');
        $user_detail=$this->admin_model->get_user_detail($user_email);

        if(password_verify($user_password, $user_detail->user_password))
        {
        	if($user_detail->user_role == 1)
        	{

        		$session_data['user_email']=$user_detail->user_email;
        		$session_data['user_status']=$user_detail->user_status;
        		$session_data['user_role']=$user_detail->user_role;
        		$session_data['user_id']=$user_detail->user_id;
        		$this->session->set_userdata($session_data);


                 redirect('admin-dashboard');

        	}
        	else 
        	{
        		$data['error_message']='Incorrect email or password';
        	    $this->load->view('admin/admin_login', $data);
        	}

        }

        else
        {
        	$data['error_message']='Incorrect email or password';
        	$this->load->view('admin/admin_login', $data);
        }
	}


	public function admin_logout_check()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

}

	
