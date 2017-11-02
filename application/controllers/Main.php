<?php
class Main extends CI_Controller {
    public function index() {
    	$this->load->view('templates/header');
    	$this->load->view('etool_view');
    	$this->load->view('templates/footer');
    }

}