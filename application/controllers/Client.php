<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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


    public function client_list(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['clientList'] = $this->query_model->client_list();
		$data['title'] = 'client List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/client/client_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
    public function client_add(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'client Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/client/client_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
	public function edit_client($client_id){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['clientDetailsSingle'] = $this->query_model->client_details_single($client_id);
		$data['title'] = 'client Update';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/client/client_edit_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function client_save(){
		
			if($_FILES['client_image']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Image Field Required';
				$this->session->set_userdata($sdata);
				$this->client_add();
			}else{
				if ($_FILES['client_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['client_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["client_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "500" || $height == "333"){
	
							$result = $this->do_upload('client_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
								$data['status'] = '1';
								$data['client_image'] = $img;

								$this->query_model->client_save($data);

								$sdata = array();
								$sdata['message'] = 'Successfully Save';
								$this->session->set_userdata($sdata);
								$this->client_add();
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (500 x 333)';
							$this->session->set_userdata($sdata);
							$this->client_add();
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->client_add();
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->client_add();
				}
			}
	}


	public function client_update(){
		$client_id = $this->input->post('id', true);
		
		if($_FILES['client_image']['name'] == ''){
			$img = $this->input->post('old_client_image', TRUE);
			$this->query_model->update_client($img);
			$sdata = array();
			$sdata['message'] = 'Successfully Updated';
			$this->session->set_userdata($sdata);
			$this->edit_client($client_id);
		}else{
			if ($_FILES['client_image']['size'] <= 10000000) {
			
				$fileExt = pathinfo($_FILES['client_image']['name'], PATHINFO_EXTENSION);
				if ($fileExt == 'jpg' || $fileExt == 'png'){

					
					$file = $_FILES["client_image"]['tmp_name'];
					list($width, $height) = getimagesize($file);

					if($width == "500" || $height == "333"){

						$path = "./".$this->input->post('old_client_image', TRUE);
						unlink($path);

						$result = $this->do_upload('client_image');
						if ($result['upload_data']) {
							$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
							$this->query_model->update_client($img);
							$sdata = array();
							$sdata['message'] = 'Successfully Updated';
							$this->session->set_userdata($sdata);
							$this->edit_client($client_id);
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Image size will be (500 x 333)';
						$this->session->set_userdata($sdata);
						$this->edit_client($client_id);
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image (jpg/png)';
					$this->session->set_userdata($sdata);
					$this->edit_client($client_id);
				}
			}else{
				$sdata = array();
				$sdata['message'] = 'Select an image in size less than 1MB';
				$this->session->set_userdata($sdata);
				$this->edit_client($client_id);
			}
		}
	}

	public function delete_status_client($client_id){
		$this->db->set('status', '0');
        $this->db->set('delete_status', 'deleted');
        $this->db->where('id', $client_id);
        $this->db->update('tbl_client');
		$sdata = array();
		$sdata['message'] = 'client Deleted Successfully!';
		$this->session->set_userdata($sdata);
		$this->client_list();
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