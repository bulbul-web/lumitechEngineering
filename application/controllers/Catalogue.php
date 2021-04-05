<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogue extends CI_Controller {

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


    public function catalogue_list(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['catalogueList'] = $this->query_model->catalogue_list();
		$data['title'] = 'catalogue List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/catalogue/catalogue_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
    public function catalogue_add(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'catalogue Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/catalogue/catalogue_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
	public function edit_catalogue($catalogue_id){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['catalogueDetailsSingle'] = $this->query_model->catalogue_details_single($catalogue_id);
		$data['title'] = 'catalogue Update';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/catalogue/catalogue_edit_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function catalogue_save(){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[2]|max_length[150]');
        $this->form_validation->set_rules('details', 'Description', 'required|min_length[2]|max_length[1000]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['catalogue_image']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Files Field Required';
				$this->session->set_userdata($sdata);
				$this->catalogue_add();
			}else{
				$result = $this->do_upload('catalogue_image');
				if ($result['upload_data']) {
					$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
					$data['title'] = $this->input->post('title', true);
					$data['details'] = $this->input->post('details', true);
					$data['details_long'] = $this->input->post('details_long', true);
					$data['status'] = '1';
					$data['catalogue_image'] = $img;

					$this->query_model->catalogue_save($data);

					$sdata = array();
					$sdata['message'] = 'Successfully Save';
					$this->session->set_userdata($sdata);
					$this->catalogue_add();
				}else{
					$sdata = array();
					$sdata['message'] = 'Try Again';
					$this->session->set_userdata($sdata);
					$this->catalogue_add();
				}
				
			}
		}else {
			$this->catalogue_add();
		}
	}


	public function catalogue_update(){
		$catalogue_id = $this->input->post('id', true);
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[2]|max_length[150]');
        $this->form_validation->set_rules('details', 'Description', 'required|min_length[2]|max_length[1000]');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['catalogue_image']['name'] == ''){
				$img = $this->input->post('old_catalogue_image', TRUE);
                $this->query_model->update_catalogue($img);
				$sdata = array();
                $sdata['message'] = 'Successfully Updated';
                $this->session->set_userdata($sdata);
				$this->edit_catalogue($catalogue_id);
			}else{

				$path = "./".$this->input->post('old_catalogue_image', TRUE);
                unlink($path);

				$result = $this->do_upload('catalogue_image');
				if ($result['upload_data']) {
					$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
					$this->query_model->update_catalogue($img);
					$sdata = array();
					$sdata['message'] = 'Successfully Updated';
					$this->session->set_userdata($sdata);
					$this->edit_catalogue($catalogue_id);
				}else{
					$sdata = array();
					$sdata['message'] = 'Try Again';
					$this->session->set_userdata($sdata);
					$this->edit_catalogue($catalogue_id);
				}
				
			}
		}else {
			$this->edit_catalogue($catalogue_id);
		}
	}

	public function delete_status_catalogue($catalogue_id){
		$this->db->set('status', '0');
        $this->db->set('delete_status', 'deleted');
        $this->db->where('id', $catalogue_id);
        $this->db->update('tbl_catalogue');
		$sdata = array();
		$sdata['message'] = 'catalogue Deleted Successfully!';
		$this->session->set_userdata($sdata);
		$this->catalogue_list();
	}








    //------------------------------------------------------- img upload function -------------------------------

    public function do_upload($image_file) {
        $config['upload_path'] = './assets/frontend/img/';
        $config['allowed_types'] = 'jpg|png|doc|docx|pdf';
		$lastid = $this->db->query('SELECT id FROM tbl_catalogue ORDER BY CAST(id AS int) DESC LIMIT 1')->row();
            
		if(!empty($lastid)){
			$lastid = $lastid->id;
			
		}else{
			$lastid = 0;
		}
		$cc = intval($lastid)+1;
		$id = $cc;
        $new_name = $id .'_'. $_FILES["$image_file"]['name'];

		
        $config['file_name'] = $new_name;
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '10000000';
        $config['max_width'] = '1024000';
        $config['max_height'] = '768000';
        $config['overwrite'] = FALSE;

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