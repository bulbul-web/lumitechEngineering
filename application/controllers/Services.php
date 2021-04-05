<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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

    public function services_list(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['serviceList'] = $this->query_model->services_list();
		$data['title'] = 'Service List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/services_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
	

    public function services_add_form(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'Service List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/services_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
	public function edit_service_form($service_id){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['serviceListSingle'] = $this->query_model->service_list_single($service_id);
		$data['title'] = 'Service Update';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/service_update_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }


    public function service_save(){
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[1]|max_length[250]');
        $this->form_validation->set_rules('details', 'details', 'required|min_length[2]|max_length[1000]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['service_image']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Image Field Required';
				$this->session->set_userdata($sdata);
				$this->services_add_form();
			}else{
				if ($_FILES['service_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['service_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["service_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "768" || $height == "450"){
	
							$result = $this->do_upload('service_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
								$data['title'] = $this->input->post('title', true);
								$data['details'] = $this->input->post('details', true);
								$data['details_long'] = $this->input->post('details_long', true);
								$data['status'] = '1';
								$data['service_image'] = $img;

								$this->query_model->service_save($data);

								$sdata = array();
								$sdata['message'] = 'Successfully Save';
								$this->session->set_userdata($sdata);
								$this->services_add_form();
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (768 x 450)';
							$this->session->set_userdata($sdata);
							$this->services_add_form();
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->services_add_form();
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->services_add_form();
				}
			}
		}else {
			$this->services_add_form();
		}
    }
    
	
	public function service_update(){
		$service_id = $this->input->post('id', true);
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[1]|max_length[250]');
        $this->form_validation->set_rules('details', 'details', 'required|min_length[2]|max_length[1000]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['service_image']['name'] == ''){
				$img = $this->input->post('old_service_image', TRUE);
                $this->query_model->update_service($img);
				$sdata = array();
                $sdata['message'] = 'Successfully Updated';
                $this->session->set_userdata($sdata);
                $this->edit_service_form($service_id);
			}else{
				if ($_FILES['service_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['service_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["service_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "768" || $height == "450"){
	
							$path = "./".$this->input->post('old_service_image', TRUE);
                            unlink($path);

							$result = $this->do_upload('service_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
								$this->query_model->update_service($img);

								$sdata = array();
								$sdata['message'] = 'Successfully Updated';
								$this->session->set_userdata($sdata);
								$this->edit_service_form($service_id);
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (768 x 450)';
							$this->session->set_userdata($sdata);
							$this->edit_service_form($service_id);
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->edit_service_form($service_id);
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->edit_service_form($service_id);
				}
			}
		}else {
			$this->edit_service_form($service_id);
		}
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