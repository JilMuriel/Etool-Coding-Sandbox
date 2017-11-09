<?php
class Mysql extends CI_Controller {
    public function index() {
        $data['title'] = 'Welcome ';
    	$this->load->view('templates/header', $data);
        $this->load->view('templates/header_content');
    	$this->load->view('mysql_view');
    	$this->load->view('templates/footer');
    }

}