<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyInfo extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->load->model('users_model');
        $this->loged_out();
    }
    
    private function loged_out(){
        if(!$this->session->userdata('authenticated'))
        {
            $this->session->sess_destroy();
            redirect('login');
        }
	}

    public function edit_company_profile($cmny_id){
		$data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['companyInfoSingle'] = $this->query_model->company_info_single($cmny_id);
		$data['title'] = 'Company Information';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/company_update_profile", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
	}

}