<?php
class Learn extends CI_Controller {
    public function index() {
    	$data['title'] = 'Etool';
    	$this->load->view('templates/header', $data);
    	$this->load->view('learn_view');
    	$this->load->view('templates/footer');
    }

}