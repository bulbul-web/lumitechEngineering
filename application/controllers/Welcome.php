<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Home';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/main", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function projects()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Projects List';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/projects", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function about()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'About';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/about", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function gallery()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Gallery';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/gallery", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function contact()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Contact';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/contact", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}

	public function service_details_page($service_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['serviceListSingle'] = $this->query_model->service_list_single($service_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/service_details_page", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function productsPage($product_cat_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['allProducts'] = $this->query_model->all_products($product_cat_id);
		$data['singleProductsInfo'] = $this->query_model->single_products_info($product_cat_id);
		$data['title'] = 'Product Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/productsPage", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}

	public function product_details($product_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['productDetailsByProductID'] = $this->query_model->product_details_by_product_id($product_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/product_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function project_details($project_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		// $data['serviceListSingle'] = $this->query_model->service_list_single($service_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/project_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function category_details($category_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		// $data['serviceListSingle'] = $this->query_model->service_list_single($service_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/category_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}

}
