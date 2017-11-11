<?php
class result extends CI_Controller {
    public function index() {
    	$data['title'] = 'Etool';
    	$this->load->view('templates/header', $data);
    	$this->load->view('project_result');
    	$this->load->view('templates/footer');
    }

}