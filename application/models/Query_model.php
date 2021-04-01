<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query_model extends CI_Model {
    
    
    public function slider_list(){
        $result = $this->db->query("SELECT * FROM tbl_sliders Where NOT (delete_status <=> 'deleted')  ORDER BY order_by ASC")->result();
        return $result;
    }
   
    public function services_list(){
        $result = $this->db->query("SELECT * FROM tbl_services WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }

    public function slider_save($data){
        $this->db->insert('tbl_sliders', $data);
    }
    
    public function service_save($data){
        $this->db->insert('tbl_services', $data);
    }

    public function slider_list_single($slider_id){
        $result = $this->db->query("SELECT * FROM tbl_sliders Where id = '$slider_id' ")->row();
        return $result;
    }
    
    public function service_list_single($service_id){
        $result = $this->db->query("SELECT * FROM tbl_services Where id = '$service_id' ")->row();
        return $result;
    }
    
    public function company_info_single($cmny_id){
        $result = $this->db->query("SELECT * FROM tbl_info Where id = '$cmny_id' ")->row();
        return $result;
    }

    public function update_slider($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', true);
        $data['description'] = $this->input->post('description', true);
        $data['order_by'] = $this->input->post('order_by', true);
        $data['status'] = $this->input->post('status', true);
        $data['slider_img'] = $img;

        $this->db->where('id', $id);
        $this->db->update('tbl_sliders', $data);
    }
    
    public function update_service($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', true);
        $data['details'] = $this->input->post('details', true);
        $data['status'] = $this->input->post('status', true);
        $data['service_image'] = $img;

        $this->db->where('id', $id);
        $this->db->update('tbl_services', $data);
    }

    public function update_company($img){
        $id = $this->input->post('id', true);
        $data['mobile_1'] = $this->input->post('mobile_1', true);
		$data['mobile_2'] = $this->input->post('mobile_2', true);
		$data['mobile_3'] = $this->input->post('mobile_3', true);
		$data['email_1'] = $this->input->post('email_1', true);
		$data['email_2'] = $this->input->post('email_2', true);
		$data['company_add_1'] = $this->input->post('company_add_1', true);
		$data['company_add_2'] = $this->input->post('company_add_2', true);
		$data['logo_header'] = $img['logo_img'];
		$data['footer_img'] = $img['footer_img'];

        // echo '<pre>';
        // print_r($data);
        // exit();
        $this->db->where('id', $id);
        $this->db->update('tbl_info', $data);
    }

    

}