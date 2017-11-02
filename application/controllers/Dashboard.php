<?php
class Dashboard extends CI_Controller {
    public function index() {
    	$this->load->view('templates/header');
        $this->load->view('templates/header_content');
    	$this->load->view('dashboard_view');
    	$this->load->view('templates/footer');
    }
    public function create_project() {
        $this->load->view('templates/header');
        $this->load->view('create_project_view');
        $this->load->view('templates/footer');
    }
    public function create_database() {
        $this->load->view('templates/header');
        $this->load->view('create_database_view');
        $this->load->view('templates/footer');
    }
    public function project() {
        $this->load->view('templates/header');
        $this->load->view('templates/header_content');
        $this->load->view('project_view');
        $this->load->view('templates/footer');
    }
}