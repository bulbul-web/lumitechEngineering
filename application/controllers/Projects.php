<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

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


    public function project_list(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['projectList'] = $this->query_model->project_list();
		$data['title'] = 'Projects List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/projects/projects_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
    public function project_add(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'Projects Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/projects/projects_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function project_save(){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[2]|max_length[150]');
        $this->form_validation->set_rules('details', 'Description', 'required|min_length[2]|max_length[1000]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['project_image']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Image Field Required';
				$this->session->set_userdata($sdata);
				$this->project_add();
			}else{
				if ($_FILES['project_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['project_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["project_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "768" || $height == "450"){
	
							$result = $this->do_upload('project_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
								$data['title'] = $this->input->post('title', true);
								$data['details'] = $this->input->post('details', true);
								$data['status'] = '1';
								$data['project_image'] = $img;

								$this->query_model->project_save($data);

								$sdata = array();
								$sdata['message'] = 'Successfully Save';
								$this->session->set_userdata($sdata);
								$this->project_add();
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (768 x 450)';
							$this->session->set_userdata($sdata);
							$this->project_add();
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->project_add();
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->project_add();
				}
			}
		}else {
			$this->project_add();
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