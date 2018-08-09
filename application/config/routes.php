<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/




$route['update-product']='product/update_product';
$route['edit-product/(.+)']='product/edit_product/$1';
$route['change-product-status/(.+)/(.+)']='product/change_product_status/$1/$2';
$route['manage-product']='product/manage_product';
$route['add-product']='product/add_product';


$route['edit-manufacturer/(.+)']='manufacturer/edit_manufacturer/$1';
$route['change-manufacturer-status/(.+)/(.+)']='manufacturer/change_manufacturer_status/$1/$2';
$route['manage-manufacturer']='manufacturer/manage_manufacturer';
$route['add-manufacturer']='manufacturer/add_manufacturer';


$route['edit-category/(.+)']='category/edit_category/$1';
$route['change-category-status/(.+)/(.+)']='category/change_category_status/$1/$2';
$route['manage-category']='category/manage_category';
$route['add-category']='category/show_add_category_form';


$route['register-admin']='admin/show_new_admin_register_form';
$route['admin-logout']='admin_login/admin_logout_check';
$route['admin-dashboard'] = 'admin/show_dashboard';
$route['admin-login'] = 'admin_login/admin_login_check';
$route['admin'] = 'admin_login';


$route['search-product']='welcome/search_product_by_name';
$route['brand/(.+)']='welcome/brand_product/$1';
$route['category/(.+)']='welcome/category_page/$1';
$route['product-details/(.+)']='welcome/product_details/$1';


$route['default_controller'] = 'welcome';


//user class//






$route['logout']='user_login/logout';
$route['customer-login']='user_login/user_login_check';






// checkout class //



$route['cancel']='checkout/cancel';
$route['fail']='checkout/fail';
$route['success']='checkout/success';
$route['place-order']='checkout/place_order';
$route['payment']='checkout/payment';
$route['shipping']='checkout/shipping';
$route['save-shipping']='checkout/save_shipping';
$route['update-billing']='checkout/update_billing';
$route['billing']='checkout/billing';
$route['customer-registration']='checkout/customer_registration';
$route['checkout']='checkout/index';



// Cart class//


$route['delete-to-cart/(.+)']='cart/delete_to_cart/$1';
$route['update-cart-product-qty']='cart/update_cart_product_qty';s
$route['show-cart']='cart/show_cart';
$route['add-to-cart']='cart/add_to_cart';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
