<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	
	public function index()
	{
		$data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'Home';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/homeContent", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
	}
	
	public function slider()
	{
		$data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['sliderList'] = $this->query_model->slider_list();
		$data['title'] = 'Slider List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/slider", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
	}
	
	public function msg_list()
	{
		$data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['msgList'] = $this->query_model->msg_list();
		$data['title'] = 'Slider List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/msg_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
	}

	public function slider_add_form(){
		$data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'Slider Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/slider_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
	}
	
	public function edit_slider_form($slider_id){
		$data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['sliderListSingle'] = $this->query_model->slider_list_single($slider_id);
		$data['title'] = 'Slider Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/slider_update_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
	}


	public function slider_save(){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[2]|max_length[150]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[2]|max_length[150]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['slider_img']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Image Field Required';
				$this->session->set_userdata($sdata);
				$this->slider_add_form();
			}else{
				if ($_FILES['slider_img']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['slider_img']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["slider_img"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "1300" || $height == "468"){
	
							$result = $this->do_upload('slider_img');
							if ($result['upload_data']) {
								$img = '/assets/admin_assets/images/uploadedFile/' . $result['upload_data']['file_name'];
								$data['title'] = $this->input->post('title', true);
								$data['description'] = $this->input->post('description', true);
								$data['order_by'] = $this->input->post('order_by', true);
								$data['status'] = '1';
								$data['slider_img'] = $img;

								$this->query_model->slider_save($data);

								$sdata = array();
								$sdata['message'] = 'Successfully Save';
								$this->session->set_userdata($sdata);
								$this->slider_add_form();
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (1300 x 468)';
							$this->session->set_userdata($sdata);
							$this->slider_add_form();
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->slider_add_form();
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->slider_add_form();
				}
			}
		}else {
			$this->slider_add_form();
		}
	}

	public function slider_update(){
		$slider_id = $this->input->post('id', true);
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[2]|max_length[150]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[2]|max_length[150]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['slider_img']['name'] == '' || $_FILES['slider_img']['size'] == 0){
				$img = $this->input->post('old_slider_img', TRUE);
                $this->query_model->update_slider($img);
				$sdata = array();
                $sdata['message'] = 'Successfully Updated';
                $this->session->set_userdata($sdata);
                $this->edit_slider_form($slider_id);
			}else{
				if ($_FILES['slider_img']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['slider_img']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["slider_img"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "1300" || $height == "468"){
	
							$path = "./".$this->input->post('old_slider_img', TRUE);
                            unlink($path);

							$result = $this->do_upload('slider_img');
							if ($result['upload_data']) {
								$img = '/assets/admin_assets/images/uploadedFile/' . $result['upload_data']['file_name'];
								$this->query_model->update_slider($img);

								$sdata = array();
								$sdata['message'] = 'Successfully Updated';
								$this->session->set_userdata($sdata);
								$this->edit_slider_form($slider_id);
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (1300 x 468)';
							$this->session->set_userdata($sdata);
							$this->edit_slider_form($slider_id);
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->edit_slider_form($slider_id);
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->edit_slider_form($slider_id);
				}
			}
		}else {
			$this->edit_slider_form($slider_id);
		}
	}



	public function delete_status_slider($slider_id){
		$this->db->set('status', '0');
        $this->db->set('delete_status', 'deleted');
        $this->db->where('id', $slider_id);
        $this->db->update('tbl_sliders');
		$sdata = array();
		$sdata['message'] = 'Slider Deleted Successfully!';
		$this->session->set_userdata($sdata);
		$this->slider();
	}
	
	public function msg_status_change($id, $staus){
		if($staus == 0):
			$this->db->set('status', '1');
		elseif($staus == 1):
			$this->db->set('status', '0');
		endif;
        $this->db->where('id', $id);
        $this->db->update('tbl_msg');
		$sdata = array();
		$sdata['message'] = 'Massege seen successfully';
		$this->session->set_userdata($sdata);
		$this->msg_list();
	}
















	//------------------------------------------------------- img upload function -------------------------------

    public function do_upload($image_file) {
        $config['upload_path'] = './assets/admin_assets/images/uploadedFile/';
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
