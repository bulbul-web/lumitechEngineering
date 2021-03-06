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
    
    public function products_list(){
        $result = $this->db->query("SELECT * FROM tbl_products WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function project_list(){
        $result = $this->db->query("SELECT * FROM tbl_projects WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function news_list(){
        $result = $this->db->query("SELECT * FROM tbl_news WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function catalogue_list(){
        $result = $this->db->query("SELECT * FROM tbl_catalogue WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function client_list(){
        $result = $this->db->query("SELECT * FROM tbl_client WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function bod_list(){
        $result = $this->db->query("SELECT * FROM tbl_bod WHERE NOT (delete_status <=> 'deleted')  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function all_products($product_cat_id){
        $result = $this->db->query("SELECT * FROM tbl_products WHERE NOT (delete_status <=> 'deleted') AND product_category_id = '$product_cat_id'  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function single_products_info($product_cat_id){
        $result = $this->db->query("SELECT * FROM tbl_products WHERE NOT (delete_status <=> 'deleted') AND product_category_id = '$product_cat_id'  ORDER BY id DESC")->row();
        return $result;
    }
    
    public function product_single_details($product_id){
        $result = $this->db->query("SELECT * FROM tbl_products WHERE id = '$product_id' ")->row();
        return $result;
    }
    
    public function product_details_by_product_id($product_id){
        $result = $this->db->query("SELECT * FROM tbl_products WHERE NOT (delete_status <=> 'deleted') AND id = '$product_id'  ORDER BY id DESC")->row();
        return $result;
    }
    
    public function products_category_list(){
        $result = $this->db->query("SELECT * FROM tbl_products_category WHERE NOT (delete_status <=> 'deleted') ORDER BY id DESC")->result();
        return $result;
    }
    
    public function category_list(){
        $result = $this->db->query("SELECT * FROM tbl_services  ORDER BY id DESC")->result();
        return $result;
    }
    
    public function msg_list(){
        $result = $this->db->query("SELECT * FROM tbl_msg  ORDER BY id DESC")->result();
        return $result;
    }

    public function get_product_category_by_serviceId($serviceId){
        $result = $this->db->query("SELECT * FROM tbl_products_category WHERE service_id =  '$serviceId' ORDER BY id DESC")->result();
        return $result;
    }

    public function slider_save($data){
        $this->db->insert('tbl_sliders', $data);
    }
    
    public function project_save($data){
        $this->db->insert('tbl_projects', $data);
    }
    
    public function news_save($data){
        $this->db->insert('tbl_news', $data);
    }
    
    public function catalogue_save($data){
        $this->db->insert('tbl_catalogue', $data);
    }
    
    public function client_save($data){
        $this->db->insert('tbl_client', $data);
    }
    
    public function bod_save($data){
        $this->db->insert('tbl_bod', $data);
    }
    
    public function msge_send($data){
        $this->db->insert('tbl_msg', $data);
    }
    
    public function product_save($data){
        $this->db->insert('tbl_products', $data);
    }
    
    public function service_save($data){
        $this->db->insert('tbl_services', $data);
    }
    
    public function products_category_save($data){
        $this->db->insert('tbl_products_category', $data);
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
    
    public function project_details_single($project_id){
        $result = $this->db->query("SELECT * FROM tbl_projects Where id = '$project_id' ")->row();
        return $result;
    }
    
    public function news_details_single($news_id){
        $result = $this->db->query("SELECT * FROM tbl_news Where id = '$news_id' ")->row();
        return $result;
    }
    
    public function category_single($produc_cat_id){
        $result = $this->db->query("SELECT * FROM tbl_products_category Where id = '$produc_cat_id' ")->row();
        return $result;
    }
    
    public function catalogue_details_single($catalogue_id){
        $result = $this->db->query("SELECT * FROM tbl_catalogue Where id = '$catalogue_id' ")->row();
        return $result;
    }
    
    public function client_details_single($client_id){
        $result = $this->db->query("SELECT * FROM tbl_client Where id = '$client_id' ")->row();
        return $result;
    }
    
    public function bod_details_single($bod_id){
        $result = $this->db->query("SELECT * FROM tbl_bod Where id = '$bod_id' ")->row();
        return $result;
    }

    public function products_category_update($data){
        $id = $this->input->post('id', true);
        $this->db->where('id', $id);
        $this->db->update('tbl_products_category', $data);
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
		$data['details_long'] = $this->input->post('details_long', true);
        $data['status'] = $this->input->post('status', true);
        $data['service_image'] = $img;

        $this->db->where('id', $id);
        $this->db->update('tbl_services', $data);
    }

    public function update_products($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['service_id'] = $this->input->post('service_id', true);
        $data['product_category_id'] = $this->input->post('product_category_id', true);
        $data['product_name'] = $this->input->post('product_name', true);
        $data['details'] = $this->input->post('details', true);
		$data['details_long'] = $this->input->post('details_long', true);
        $data['status'] = $this->input->post('status', true);
        $data['product_image'] = $img;

        // print_r($data);
        // exit();

        $this->db->where('id', $id);
        $this->db->update('tbl_products', $data);
    }
    
    public function update_project($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', true);
        $data['details'] = $this->input->post('details', true);
		$data['details_long'] = $this->input->post('details_long', true);
        $data['status'] = $this->input->post('status', true);
        $data['project_image'] = $img;

        // print_r($data);
        // exit();

        $this->db->where('id', $id);
        $this->db->update('tbl_projects', $data);
    }
    
    public function update_news($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', true);
        $data['details'] = $this->input->post('details', true);
		$data['details_long'] = $this->input->post('details_long', true);
        $data['status'] = $this->input->post('status', true);
        $data['news_image'] = $img;

        // print_r($data);
        // exit();

        $this->db->where('id', $id);
        $this->db->update('tbl_news', $data);
    }
    
    public function update_catalogue($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', true);
        $data['details'] = $this->input->post('details', true);
        $data['details_long'] = $this->input->post('details_long', true);
        $data['status'] = $this->input->post('status', true);
        $data['catalogue_image'] = $img;

        // print_r($data);
        // exit();

        $this->db->where('id', $id);
        $this->db->update('tbl_catalogue', $data);
    }
    
    public function update_client($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['status'] = $this->input->post('status', true);
        $data['client_image'] = $img;

        // print_r($data);
        // exit();

        $this->db->where('id', $id);
        $this->db->update('tbl_client', $data);
    }
    
    public function update_bod($img){
        $data = array();
        $id = $this->input->post('id', TRUE);
        $data['name'] = $this->input->post('name', true);
        $data['details'] = $this->input->post('details', true);
        $data['designation'] = $this->input->post('designation', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['email'] = $this->input->post('email', true);
        $data['status'] = $this->input->post('status', true);
        $data['bod_image'] = $img;

        // print_r($data);
        // exit();

        $this->db->where('id', $id);
        $this->db->update('tbl_bod', $data);
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
		$data['philosophy'] = $this->input->post('philosophy', true);
		$data['about_company'] = $this->input->post('about_company', true);
		$data['logo_header'] = $img['logo_img'];
		$data['footer_img'] = $img['footer_img'];

        // echo '<pre>';
        // print_r($data);
        // exit();
        $this->db->where('id', $id);
        $this->db->update('tbl_info', $data);
    }

    

}