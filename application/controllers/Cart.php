<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Cart extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('cart_model');
		$this->load->library('cart');

	}


	public function add_to_cart()
	{
		$product_id=$this->input->post('product_id',true);
		$qty=$this->input->post('qty',true);

		$product_info=$this->cart_model->select_product_info_by_product_id($product_id);

		$data = array(
        'id'      => $product_info->product_id,
        'qty'     => $qty,
        'price'   => $product_info->product_price,
        'name'    => $product_info->product_name,
        'options' => array('image' => $product_info->product_image) 
       );
         
        // echo '<pre>';
         //print_r($data);
         //exit();

        $this->cart->insert($data);
       redirect('show-cart');


	}

	public function show_cart()
	{
		$data=array();
        $data['title']='Product Details';
        $data['slider']='';
        $data['side_bar']='';
        //$data['product_info']=$this->welcome_model->select_product_by_id($product_id);
        $data['featured_product']=$this->load->view('pages/cart_view', '', true);
        $data['category_product']='';
        $data['recomended_product']='';		
		$this->load->view('master', $data);

	}

	public function delete_to_cart($rowid)
	{
		$data = array(
        'rowid' => $rowid,
        'qty'   => 0
       );

         $this->cart->update($data);
         redirect('show-cart');
	}


	public function update_cart_product_qty()
	{
		$qty=$this->input->post('qty', true);
		$rowid=$this->input->post('rowid', true);

		$data = array(
        'rowid' => $rowid,
        'qty'   => $qty
       );

         $this->cart->update($data);
         redirect('show-cart');

	}



}