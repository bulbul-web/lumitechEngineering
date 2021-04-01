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
$route['about'] = 'welcome/about';
$route['gallery'] = 'welcome/gallery';
$route['contact'] = 'welcome/contact';
$route['service-details-page/(:any)'] = 'welcome/service_details_page/$1';
$route['products/(:any)'] = 'welcome/productsPage/$1';
$route['product-details/(:any)'] = 'welcome/product_details/$1';
$route['project-details/(:any)'] = 'welcome/project_details/$1';
$route['category-details/(:any)'] = 'welcome/category_details/$1';
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
$route['edit-slider/(:any)'] = 'dashboard/edit_slider_form/$1';
$route['slider-update'] = 'dashboard/slider_update';

$route['company-info/(:any)'] = 'companyInfo/edit_company_profile/$1';
$route['company-update'] = 'companyInfo/company_update';

$route['services'] = 'services/services_list';
$route['services-add'] = 'services/services_add_form';
$route['service-save'] = 'services/service_save';
$route['edit-service/(:any)'] = 'services/edit_service_form/$1';
$route['service-update'] = 'services/service_update';