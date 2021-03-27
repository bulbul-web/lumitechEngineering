<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$data['title'] = 'Home';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/main", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function products()
	{
		$data = array();
		$data['title'] = 'Products List';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/products", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function about()
	{
		$data = array();
		$data['title'] = 'About';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/about", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function gallery()
	{
		$data = array();
		$data['title'] = 'Gallery';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/gallery", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}
	
	public function contact()
	{
		$data = array();
		$data['title'] = 'Contact';
		$data['header'] = $this->load->view("frontend/header", $data, true);
		$data['main'] = $this->load->view("frontend/contact", $data, true);
		$data['footer'] = $this->load->view("frontend/footer", $data, true);
		$this->load->view('indexHome', $data);
	}

}
