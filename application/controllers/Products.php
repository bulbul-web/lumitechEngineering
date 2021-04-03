<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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


    public function products_category(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['productCategoryList'] = $this->query_model->products_category_list();
		$data['title'] = 'Products Category';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/products/products_category_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function products_list(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['productsList'] = $this->query_model->products_list();
		$data['title'] = 'Products List';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/products/products_list", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
    public function products_category_add(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
		$data['title'] = 'Products Category Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/products/products_category_add", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function products_add_form(){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['CategoryList'] = $this->query_model->category_list();
        $data['productCategoryList'] = $this->query_model->products_category_list();
		$data['title'] = 'Products Add';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/products/products_add_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }
    
    public function edit_product_form($product_id){
        $data = array();
		$id = $this->session->userdata('user_id');
        $data['userInfo'] = $this->users_model->user_info($id);
        $data['CategoryList'] = $this->query_model->category_list();
        $data['productCategoryList'] = $this->query_model->products_category_list();
        $data['productSingleDetails'] = $this->query_model->product_single_details($product_id);
		$data['title'] = 'Products Update';
		$data['css'] = $this->load->view("admin/include/css", $data, true);
		$data['js'] = $this->load->view("admin/include/js", $data, true);
		$data['sidebar'] = $this->load->view("admin/include/sidebar", $data, true);
		$data['header'] = $this->load->view("admin/include/header", $data, true);
		$data['content'] = $this->load->view("admin/pages/products/edit_product_form", $data, true);
		$data['footer'] = $this->load->view("admin/include/footer", $data, true);
		$this->load->view('admin/index', $data);
    }

    public function products_category_save(){
        $this->form_validation->set_rules('service_id', 'Service Category', 'required|min_length[1]|max_length[250]');
        $this->form_validation->set_rules(
            'category_name', 'Products Category',
            'required|min_length[1]|max_length[250]|is_unique[tbl_products_category.category_name]',
            array(
                'required'      =>  'You have not provide %s.',
                'is_unique'     =>  'This %s already exits.'
            )
        );
        if($this->form_validation->run()){
            $data['service_id'] = $this->input->post('service_id', true);
            $data['category_name'] = $this->input->post('category_name', true);
            $this->query_model->products_category_save($data);
            $sdata = array();
            $sdata['message'] = 'Products category successfully save';
            $this->session->set_userdata($sdata);
            $this->products_category_add();
        }else{
            $sdata = array();
            $sdata['message'] = 'Try again';
            $this->session->set_userdata($sdata);
            $this->products_category_add();
        }
        

    }

    public function get_product_category_by_serviceId($serviceId){
        $getProductCategoryByServiceId = $this->query_model->get_product_category_by_serviceId($serviceId);
        $output = null;
        // $output .= '<option value="" disabled selected>----Select----</option>';
        foreach ($getProductCategoryByServiceId as $productCategory)
        {
            $output .= '<option value="'.$productCategory->id.'">'.$productCategory->category_name.'</option>';
        }
        echo $output;
    }

    public function products_save(){
        $this->form_validation->set_rules('product_category_id', 'Product Category', 'required|min_length[1]|max_length[250]');
        $this->form_validation->set_rules(
            'product_name', 'Products Name',
            'required|min_length[1]|max_length[250]|is_unique[tbl_products_category.category_name]',
            array(
                'required'      =>  'You have not provide %s.',
                'is_unique'     =>  'This %s already exits.'
            )
        );
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['product_image']['name'] == ''){
				$sdata = array();
				$sdata['message'] = 'Image Field Required';
				$this->session->set_userdata($sdata);
				$this->products_add_form();
			}else{
				if ($_FILES['product_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["product_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "768" || $height == "450"){
	
							$result = $this->do_upload('product_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
								$data['service_id'] = $this->input->post('service_id', true);
								$data['product_category_id'] = $this->input->post('product_category_id', true);
								$data['product_name'] = $this->input->post('product_name', true);
								$data['details'] = $this->input->post('details', true);
								$data['status'] = '1';
								$data['product_image'] = $img;

								$this->query_model->product_save($data);

								$sdata = array();
								$sdata['message'] = 'Successfully Save';
								$this->session->set_userdata($sdata);
								$this->products_add_form();
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (768 x 450)';
							$this->session->set_userdata($sdata);
							$this->products_add_form();
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->products_add_form();
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->products_add_form();
				}
			}
		}else {
			$this->products_add_form();
		}
    }

    public function products_update(){
        $product_id = $this->input->post('id', TRUE);
        $this->form_validation->set_rules('product_category_id', 'Product Category', 'required|min_length[1]|max_length[250]');
        $this->form_validation->set_rules(
            'product_name', 'Products Name',
            'required|min_length[1]|max_length[250]',
            array(
                'required'      =>  'You have not provide %s.'
            )
        );
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run()){
			if($_FILES['product_image']['name'] == ''){
				$img = $this->input->post('old_product_image', TRUE);
                $this->query_model->update_products($img);
				$sdata = array();
                $sdata['message'] = 'Successfully Updated';
                $this->session->set_userdata($sdata);
                $this->edit_product_form($product_id);
			}else{
				if ($_FILES['product_image']['size'] <= 10000000) {
				
					$fileExt = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
					if ($fileExt == 'jpg' || $fileExt == 'png'){
	
						
						$file = $_FILES["product_image"]['tmp_name'];
						list($width, $height) = getimagesize($file);
	
						if($width == "768" || $height == "450"){

                            $path = "./".$this->input->post('old_product_image', TRUE);
                            unlink($path);
	
							$result = $this->do_upload('product_image');
							if ($result['upload_data']) {
								$img = '/assets/frontend/img/' . $result['upload_data']['file_name'];
								$this->query_model->update_products($img);
                                $sdata = array();
                                $sdata['message'] = 'Successfully Updated';
                                $this->session->set_userdata($sdata);
                                $this->edit_product_form($product_id);
							}
						}else{
							$sdata = array();
							$sdata['message'] = 'Image size will be (768 x 450)';
							$this->session->set_userdata($sdata);
							$this->edit_product_form($product_id);
						}
					}else{
						$sdata = array();
						$sdata['message'] = 'Select an image (jpg/png)';
						$this->session->set_userdata($sdata);
						$this->edit_product_form($product_id);
					}
				}else{
					$sdata = array();
					$sdata['message'] = 'Select an image in size less than 1MB';
					$this->session->set_userdata($sdata);
					$this->edit_product_form($product_id);
				}
			}
		}else {
			$this->edit_product_form($product_id);
		}
    }




    public function delete_status_product($product_id){
		$this->db->set('status', '0');
        $this->db->set('delete_status', 'deleted');
        $this->db->where('id', $product_id);
        $this->db->update('tbl_products');
		$sdata = array();
		$sdata['message'] = 'Product Deleted Successfully!';
		$this->session->set_userdata($sdata);
		$this->products_list();
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