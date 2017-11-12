<?php
class Start extends CI_Controller {
    public function index() {
    	$data['title'] = 'Etool';
    	$this->load->view('templates/header', $data);
    	$this->load->view('start_coding');
    	$this->load->view('templates/footer');
    }

}