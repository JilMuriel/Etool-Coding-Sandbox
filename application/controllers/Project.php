<?php
class project extends CI_Controller {
    public function index() {
        $data['title'] = 'Etool';
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/header_content');
    	$this->load->view('creator_view');
    	$this->load->view('templates/footer');
    }
    public function text_editor() {
    	$data['title'] = 'Etool';
    	$this->load->view('templates/header', $data);
    	$this->load->view('templates/header_content');
    	$this->load->view('text_editor_view');
    	$this->load->view('templates/footer');
    }
}