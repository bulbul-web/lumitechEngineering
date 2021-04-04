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
$route['default_controller'] = 'welcome';
$route['all-projects'] = 'welcome/projects';
$route['all-news'] = 'welcome/all_news';
$route['about'] = 'welcome/about';
$route['gallery'] = 'welcome/gallery';
$route['contact'] = 'welcome/contact';
$route['service-details-page/(:any)'] = 'welcome/service_details_page/$1';
$route['products/(:any)'] = 'welcome/productsPage/$1';
$route['product-details/(:any)'] = 'welcome/product_details/$1';
$route['project-details/(:any)'] = 'welcome/project_details/$1';
$route['news-details/(:any)'] = 'welcome/news_details/$1';
$route['category-details/(:any)'] = 'welcome/category_details/$1';
$route['msge-send'] = 'welcome/msge_send';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'login';
$route['signup'] = 'login/signup';
$route['login-check'] = 'users/login_check';
$route['logout'] = 'users/logout';

$route['slider'] = 'dashboard/slider';
$route['slider-add'] = 'dashboard/slider_add_form';
$route['slider-save'] = 'dashboard/slider_save';
$route['delete-status-slider/(:any)'] = 'dashboard/delete_status_slider/$1';
$route['msg-status-change/(:any)'] = 'dashboard/msg_status_change/$1';
$route['edit-slider/(:any)'] = 'dashboard/edit_slider_form/$1';
$route['slider-update'] = 'dashboard/slider_update';
$route['msg-list'] = 'dashboard/msg_list';

$route['company-info/(:any)'] = 'companyInfo/edit_company_profile/$1';
$route['company-update'] = 'companyInfo/company_update';

$route['services'] = 'services/services_list';
$route['services-add'] = 'services/services_add_form';
$route['service-save'] = 'services/service_save';
$route['edit-service/(:any)'] = 'services/edit_service_form/$1';
$route['service-update'] = 'services/service_update';

$route['project-list'] = 'projects/project_list';
$route['project-add'] = 'projects/project_add';
$route['project-save'] = 'projects/project_save';
$route['edit-project/(:any)'] = 'projects/edit_project/$1';
$route['project-update'] = 'projects/project_update';
$route['delete-status-project/(:any)'] = 'projects/delete_status_project/$1';

$route['news-list'] = 'news/news_list';
$route['news-add'] = 'news/news_add';
$route['news-save'] = 'news/news_save';
$route['edit-news/(:any)'] = 'news/edit_news/$1';
$route['news-update'] = 'news/news_update';
$route['delete-status-news/(:any)'] = 'news/delete_status_news/$1';

$route['client-list'] = 'client/client_list';
$route['client-add'] = 'client/client_add';
$route['client-save'] = 'client/client_save';
$route['edit-client/(:any)'] = 'client/edit_client/$1';
$route['client-update'] = 'client/client_update';
$route['delete-status-client/(:any)'] = 'client/delete_status_client/$1';

$route['products-category'] = 'products/products_category';
$route['products-category-add'] = 'products/products_category_add';
$route['products-category-save'] = 'products/products_category_save';
$route['products-list'] = 'products/products_list';
$route['products-add'] = 'products/products_add_form';
$route['products-save'] = 'products/products_save';
$route['get-product-category-by-serviceId/(:any)'] = 'products/get_product_category_by_serviceId/$1';
$route['edit-product/(:any)'] = 'products/edit_product_form/$1';
$route['delete-status-product/(:any)'] = 'products/delete_status_product/$1';
$route['products-update'] = 'products/products_update';