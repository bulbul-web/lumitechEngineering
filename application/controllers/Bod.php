<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bod extends CI_Controller {

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


    public function bod_list(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['bodList'] = $this->query_model->bod_list();
		$data['title'] = 'Bod List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/bod/bod_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function bod_add(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'bod Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/bod/bod_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
	public function edit_bod($bod_id){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['bodDetailsSingle'] = $this->query_model->bod_details_single($bod_id);
		$data['title'] = 'bod Update';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/bod/bod_edit_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function bod_save(){

        $this->form_validation->set_rules('name', 'name', 'required|min_length[2]|max_length[100]');        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['bod_image']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Image Field Required';
				$this->session->set_userdata($sdata);
				$this->bod_add();
			}else{
				if ($_FILES['bod_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['bod_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["bod_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width ==  $height){
	
							$result = $this->do_upload('bod_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
                                $data['name'] = $this->input->post('name', true);
								$data['details'] = $this->input->post('details', true);
								$data['designation'] = $this->input->post('designation', true);
								$data['phone'] = $this->input->post('phone', true);
								$data['email'] = $this->input->post('email', true);
								$data['status'] = '1';
								$data['bod_image'] = $img;

								$this->query_model->bod_save($data);

								$sdata = array();
								$sdata['message'] = 'Successfully Save';
								$this->session->set_userdata($sdata);
								$this->bod_add();
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Please select a round size image';
							$this->session->set_userdata($sdata);
							$this->bod_add();
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->bod_add();
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->bod_add();
				}
			}
        }else {
			$this->bod_add();
		}
	}


	public function bod_update(){
		$bod_id = $this->input->post('id', true);
		
        $this->form_validation->set_rules('name', 'name', 'required|min_length[2]|max_length[100]');        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
            if($_FILES['bod_image']['name'] == ''){
                $img = $this->input->post('old_bod_image', TRUE);
                $this->query_model->update_bod($img);
                $sdata = array();
                $sdata['message'] = 'Successfully Updated';
                $this->session->set_userdata($sdata);
                $this->edit_bod($bod_id);
            }else{
                if ($_FILES['bod_image']['size'] <= 10000000) {
                
                    $fileExt = pathinfo($_FILES['bod_image']['name'], PATHINFO_EXTENSION);
                    if ($fileExt == 'jpg' || $fileExt == 'png'){

                        
                        $file = $_FILES["bod_image"]['tmp_name'];
                        list($width, $height) = getimagesize($file);

                        if($width ==  $height){

                            $path = "./".$this->input->post('old_bod_image', TRUE);
                            unlink($path);

                            $result = $this->do_upload('bod_image');
                            if ($result['upload_data']) {
                                $img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
                                $this->query_model->update_bod($img);
                                $sdata = array();
                                $sdata['message'] = 'Successfully Updated';
                                $this->session->set_userdata($sdata);
                                $this->edit_bod($bod_id);
                            }
                        }else{
                            $sdata = array();
                            $sdata['message'] = 'Please select a round size image';
                            $this->session->set_userdata($sdata);
                            $this->edit_bod($bod_id);
                        }
                    }else{
                        $sdata = array();
                        $sdata['message'] = 'Select an image (jpg/png)';
                        $this->session->set_userdata($sdata);
                        $this->edit_bod($bod_id);
                    }
                }else{
                    $sdata = array();
                    $sdata['message'] = 'Select an image in size less than 1MB';
                    $this->session->set_userdata($sdata);
                    $this->edit_bod($bod_id);
                }
            }
        } else {
            $this->edit_bod($bod_id);
        }
	}

	public function delete_status_bod($bod_id){
		$this->db->set('status', '0');
        $this->db->set('delete_status', 'deleted');
        $this->db->where('id', $bod_id);
        $this->db->update('tbl_bod');
		$sdata = array();
		$sdata['message'] = 'bod Deleted Successfully!';
		$this->session->set_userdata($sdata);
		$this->bod_list();
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