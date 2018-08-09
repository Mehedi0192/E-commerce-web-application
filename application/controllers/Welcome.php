<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model');
	}

	public function index()
	{
		$data=array();
		$data['title']='Home';
		$data['slider']=$this->load->view('pages/slider','',TRUE);
		$data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
		$data['all_active_product']=$this->welcome_model->all_active_product();
		$data['featured_product']=$this->load->view('pages/featured_product', $data, TRUE);
		$data['category_product']='';
		$data['recomended_product']='';
	    $this->load->view('master', $data);
	}

	public function home()
	{
		$data=array();
		$data['title']='Home';
		$data['slider']=$this->load->view('pages/slider','',TRUE);
		$data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
		$data['all_active_product']=$this->welcome_model->all_active_product();
		$data['featured_product']=$this->load->view('pages/featured_product', $data, TRUE);
		$data['category_product']='';
		$data['recomended_product']='';
	    $this->load->view('master', $data);
	}

	public function account()
	{
        $data=array();
        $data['title']='Account';
		$data['slider']='';
		$data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
		$data['featured_product']='Accounts Information goes here';
		$data['category_product']='';
		$data['recomended_product']='';
	    $this->load->view('master', $data);
	}


	public function product_details($product_id)
	{
        
        $data=array();
        $data['title']='Product Details';
        $data['slider']='';
        $data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
        $data['product_info']=$this->welcome_model->select_product_by_id($product_id);
        $data['featured_product']=$this->load->view('pages/product_detail', $data, true);
        $data['category_product']='';
        $data['recomended_product']=$this->load->view('pages/recomended_product', '',TRUE);		
		$this->load->view('master', $data);


	}

	public function category_page($category_id)
	{
		$data=array();
        $data['title']='Category';
        $data['slider']='';
        $data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
        $data['category_page_product']=$this->welcome_model->select_category_page_by_id($category_id);
        $data['featured_product']=$this->load->view('pages/category_page', $data, true);
        $data['category_product']='';
        $data['recomended_product']='';		
		$this->load->view('master', $data);

	}

	function brand_product($manufacturer_id)
	{
		$data=array();
        $data['title']='Brand';
        $data['slider']='';
        $data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
        $data['brand_product']=$this->welcome_model->select_brand_product_by_id($manufacturer_id);
        $data['featured_product']=$this->load->view('pages/brand_product', $data, true);
        $data['category_product']='';
        $data['recomended_product']='';		
		$this->load->view('master', $data);

	}
    

    function search()
    {
$keyword = $this->input->post('product_name');
 
$data['response'] = 'false'; //Set default response
 
$query = $this->welcome_model->sw_search($keyword); //Model DB search
 
if($query->num_rows() > 0){
   $data['response'] = 'true'; //Set response
   $data['message'] = array(); //Create array
   foreach($query->result() as $row){
	  $data['message'][] = array('label'=> $row->product_name, 'value'=> $row->product_id); //Add a row to array
   }
}
echo json_encode($data);
}


function search_product_by_name()
{

	  $data=array();
        $data['title']='Product Details';
        $data['slider']='';
        $data['side_bar']=$this->load->view('pages/side_bar', '', TRUE);
        $data['product_info']=$this->welcome_model->search_product_by_name();
        $data['featured_product']=$this->load->view('pages/search_product_detail', $data, true);
        $data['category_product']='';
        $data['recomended_product']=$this->load->view('pages/recomended_product', '',TRUE);		
		$this->load->view('master', $data);
	

}


}
