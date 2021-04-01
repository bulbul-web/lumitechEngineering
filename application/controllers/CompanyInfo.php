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

	public function company_update(){
		$img = array();

		$cmpny_id = $this->input->post('id', true);
		
		if($_FILES['logo_header']['name'] == '' || $_FILES['logo_header']['size'] == 0){
			$img['logo_img'] = $this->input->post('old_logo_header', TRUE);
			// $this->query_model->update_company($img);
			$sdata = array();
			$sdata['message'] = 'Successfully Updated';
			$this->session->set_userdata($sdata);
			$this->edit_company_profile($cmpny_id);
		}else{
			if ($_FILES['logo_header']['size'] <= 10000000) {
			
				$fileExt = pathinfo($_FILES['logo_header']['name'], PATHINFO_EXTENSION);
				if ($fileExt == 'jpg' || $fileExt == 'png'){
					$file = $_FILES["logo_header"]['tmp_name'];
					list($width, $height) = getimagesize($file);
					if($width == "736" || $height == "220"){
						$path = "./".$this->input->post('old_logo_header', TRUE);
						unlink($path);
						$result = $this->do_upload('logo_header');
						if ($result['upload_data']) {
							$img['logo_img'] = '/assets/frontend/img/' . $result['upload_data']['file_name'];
							// $this->query_model->update_company($img);
							$sdata = array();
							$sdata['message'] = 'Successfully Updated';
							$this->session->set_userdata($sdata);
							$this->edit_company_profile($cmpny_id);
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Logo size will be (736 x 220)';
						$this->session->set_userdata($sdata);
						$this->edit_company_profile($cmpny_id);
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select a logo (jpg/png)';
					$this->session->set_userdata($sdata);
					$this->edit_company_profile($cmpny_id);
				}
			}else{
				$sdata = array();
				$sdata['message'] = 'Select a logo in size less than 1MB';
				$this->session->set_userdata($sdata);
				$this->edit_company_profile($cmpny_id);
			}
		}


		if($_FILES['footer_img']['name'] == '' || $_FILES['footer_img']['size'] == 0){
			$img['footer_img'] = $this->input->post('old_footer_img', TRUE);
			// $this->query_model->update_company($img);
			$sdata['message'] = 'Successfully Updated';
			$this->session->set_userdata($sdata);
			$this->edit_company_profile($cmpny_id);
		}else{
			if ($_FILES['footer_img']['size'] <= 10000000) {
			
				$fileExt = pathinfo($_FILES['footer_img']['name'], PATHINFO_EXTENSION);
				if ($fileExt == 'jpg' || $fileExt == 'png'){
					$file = $_FILES["footer_img"]['tmp_name'];
					list($width, $height) = getimagesize($file);
					if($width == "500" || $height == "333"){
						$path = "./".$this->input->post('old_footer_img', TRUE);
						unlink($path);
						$result = $this->do_upload('footer_img');
						if ($result['upload_data']) {
							$img['footer_img'] = '/assets/frontend/img/' . $result['upload_data']['file_name'];
							// $this->query_model->update_company($img);
							$sdata = array();
							$sdata['message'] = 'Successfully Updated';
							$this->session->set_userdata($sdata);
							$this->edit_company_profile($cmpny_id);
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Footer img size will be (500 x 333)';
						$this->session->set_userdata($sdata);
						$this->edit_company_profile($cmpny_id);
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select footer img in (jpg/png)';
					$this->session->set_userdata($sdata);
					$this->edit_company_profile($cmpny_id);
				}
			}else{
				$sdata = array();
				$sdata['message'] = 'Select footer img in size less than 1MB';
				$this->session->set_userdata($sdata);
				$this->edit_company_profile($cmpny_id);
			}
		}

		
		$this->query_model->update_company($img);
		$this->edit_company_profile($cmpny_id);

		
	}










	//------------------------------------------------------- img upload function -------------------------------

    public function do_upload($image_file) {
        $config['upload_path'] = './assets/frontend/img/';
        $config['allowed_types'] = 'jpg|png';
        $new_name = microtime() . $_FILES["$image_file"]['name'];
        $config['file_name'] = md5($new_name);
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '1000000';
        $config['max_width'] = '1024000';
        $config['max_height'] = '768000';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($image_file)) {
            $error = array('error' => $this->upload->display_errors(), 'upload_data' => '');
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data(), 'error' => '');
            return $data;
        }
    }

}