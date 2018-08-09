<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data=array();
		$data['title']='Home';
		$data['slider']=$this->load->view('pages/slider','',true);
		$data['featured_product']=$this->load->view('pages/featured_product','',true);
	    $this->load->view('master',$data);
	}

	public function account()
	{
        $data=array();
        $data['title']='Account';
		$data['slider']='';
		$data['featured_product']='accounts';
	    $this->load->view('master',$data);
	}
}
