<?php
class Main extends CI_Controller {
    public function index() {
    	$data['title'] = 'Etool';
    	$this->load->view('templates/header', $data);
    	$this->load->view('etool_view');
    	$this->load->view('templates/footer');
    }

}