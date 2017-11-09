<?php
class Dashboard extends CI_Controller {
    public function index() {
        $data['title'] = 'Getting Started';
    	$this->load->view('templates/header', $data);
    	$this->load->view('getting_started_view');
    	$this->load->view('templates/footer');
    }
}