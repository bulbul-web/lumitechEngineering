<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query_model extends CI_Model {
    
    
    public function slider_list(){
        $result = $this->db->query("SELECT * FROM tbl_sliders Where NOT (delete_status <=> 'deleted')  ORDER BY order_by ASC")->result();
        return $result;
    }

    public function slider_save($data){
        $this->db->insert('tbl_sliders', $data);
    }

    public function slider_list_single($slider_id){
        $result = $this->db->query("SELECT * FROM tbl_sliders Where id = '$slider_id' ")->row();
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

    

}