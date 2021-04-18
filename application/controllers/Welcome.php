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
		$data['allprojects'] = $this->query_model->project_list();
		$data['title'] = 'Projects List';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/projects", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function all_news()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['newsList'] = $this->query_model->news_list();
		$data['title'] = 'Projects List';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/all_news", $data, true);
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
	
	public function introduction()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Introduction';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/introduction", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function key_milestone()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Key Milestone';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/key_milestone", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function bod()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'BOD';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/bod", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function bod_details($bod_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['bodDetailsSingle'] = $this->query_model->bod_details_single($bod_id);
		$data['title'] = 'BOD Details';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/bod_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function working_invironment()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Working Invironment';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/working_invironment", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function job_vacancy()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Job Vacancy';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/job_vacancy", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function download()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'Download';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/download", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function lumitech_chemicals_and_dyes()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'lumitech chemicals and dyes';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/lumitech_chemicals_and_dyes", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function lumitech_professional_lighting()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'lumitech professional lighting';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/lumitech_professional_lighting", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function lumitech_power()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'lumitech power';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/lumitech_power", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function lumitech_construction()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'lumitech construction';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/lumitech_construction", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function lumitech_organic()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'lumitech organic';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/lumitech_organic", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function lumitech_denim_fabric_and_garments()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'lumitech denim fabric and garments';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/lumitech_denim_fabric_and_garments", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function denim_febrics()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'Denim Febrics';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/denim_febrics", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function ready_germents()
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'Ready Germents';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/ready_germents", $data, true);
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
		$data['projectDetailsSingle'] = $this->query_model->project_details_single($project_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/project_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function news_details($news_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['newsDetailsSingle'] = $this->query_model->news_details_single($news_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/news_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function category_details($catalogue_id)
	{
		$data = array();
		$cmny_id = 1;
		$data['companyInfo'] = $this->query_model->company_info_single($cmny_id);
		$data['catalogueDetailsSingle'] = $this->query_model->catalogue_details_single($catalogue_id);
		$data['title'] = 'Service Details';
		$data['productsMenu'] = $this->load->view("frontend/productsMenu", $data, true);
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/category_details", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}

	public function msge_send(){
		$data['company_name'] = $this->input->post('company_name', TRUE);
		$data['email'] = $this->input->post('email', TRUE);
		$data['name'] = $this->input->post('name', TRUE);
		$data['phone'] = $this->input->post('phone', TRUE);
		$data['message'] = $this->input->post('message', TRUE);
		$data['status'] = 0;

		if($this->query_model->msge_send($data)){
			$sdata = array();
			$sdata['message'] = 'Recieved Message';
			$this->session->set_userdata($sdata);
			redirect('default_controller');
		}else{
			redirect('default_controller');
		}
	}

}
